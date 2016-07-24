![Plastic Logo](http://i.imgur.com/PyolY7g.png)
> Plastic is an Elasticsearch ODM and mapper for Laravel.
> It renders the developer experience more enjoyable while using
> Elasticsearch, by providing a fluent syntax for mapping, querying, and storing eloquent models.

[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/sleimanx2/plastic)
[![Build Status](https://travis-ci.org/sleimanx2/plastic.svg?branch=master&&refresh=2)](https://travis-ci.org/sleimanx2/plastic)
[![StyleCI](https://styleci.io/repos/58264395/shield)](https://styleci.io/repos/58264395)

> This package is still under active development and prone to changes

##Installing Plastic

```bash
composer require sleimanx2/plastic
```

Then we need to add the plastic service provider to ```app/config.php``` under the providers key.
`Sleimanx2\Plastic\PlasticServiceProvider`

Finally we need to run:

```bash
php artisan vendor:publish
```

This will create a config file at ```config/plastic.php``` and a mapping directory at ```database/mappings```.

##Usage
- [Defining Searchable Models](#searchable-models)
- [Storing Model Content](#store-content)
- [Searching](#searching)
- [Aggregation](#aggregation)
- [Suggestions](#suggestions)
- [Mappings](#mappings)


###<a name="searchable-models"/>Defining Searchable Models</a>

To get started lets enable searching capabilities to our model by adding the Searchable
```Sleimanx2\Plastic\Searchable``` trait.

```php
use Sleimanx2\Plastic\Searchable;

class Book extends Model
{
    use Searchable;
}
```
#####Defining what data to store.

In addition to default attributes Plastic provides us with two ways to select which attributes/relations data to store in elastic.

1 - Providing a searchable property to our model

```php
public $searchable = ['id','name','body','tags','images'];
```

2 - Providing a buildDocument method

```php
public function buildDocument()
{
  return [
    'id'=> $this->id,
    'tags'=>$this->tags
  ]
}
```

#####Custom elastic type name

By the default Plastic will use the model table name as the model type however we can customize it by adding a ```$documentType``` property to our model.

```php
public $documentType = 'custom_type';
```

###<a name="store-content"/>Storing Model Content</a>

Plastic automatically syncs model data with elastic when you save or delete your model from our SQL DB however this feature can be disable by adding the following property to our model ``` public $syncDocument = false ``` .

> Its important to note that manual document update should be performed in multiple scenarios.
>
> 1 - When we perform a bulk update or delete no Eloquent  event will be triggered thus the document data won't be synced.
>
> 2 - Plastic doesn't listen to related models events yet , so when we update a related model content we should consider updating the parent document.

#####Saving a document

```php
$book = Book::first()->document()->save();
```

#####Partial updating a document

```php
$book = Book::first()->document()->update();
```

#####Deleting a document

```php
$book = Book::first()->document()->delete();
```

#####Saving documents in bulk

```php
$tag = Tag::first();

$tag->document()->bulkSave($tag->books);
```

#####Deleting documents in bulk

```php
$author = Author::first();

$author->document()->bulkDelete($author->books);
```
#####Reindexing documents in bulk

```php
$post = new Post();

$post->document()->reindex($post->all());
```

###<a name="searching"/>Searching Model Content</a>

Plastic provides a fluent syntax to query our elastic db which leads to a compact readable code lets dig into it.

```php
$result = Book::search()->match('title','pulp')->get();

// Returns a collection of Book Models
$books = $result->hits();

// Returns the total number of matched documents
$result->totalHits();

// Returns the highest query score
$result->maxScore();

//Returns the time needed to execute the query
$result->took();
```
To get the DSL query that will be executed against Elasticsearch we can do as follows:

```php
$dsl = Book::search()->match('title','pulp')->toDSL();
```

#####Pagination

```php
$books = Book::search()
  ->multiMatch(['title','description'],'ham on rie',['fuzziness' => 'AUTO'])
  ->orderBy('date')
  ->paginate();
```
we still can access the result object after pagination using the result method

```php
$books->result();
```
#####Bool Query

```php
User::search()
  ->must()
    ->term('name','kimchy')
  ->mustNot()
    ->range('age',['from'=>10,'to'=>20]);
  ->should()
    ->match('bio','developer')
    ->match('bio','elastic')
  ->filter()
   ->term('tag','tech')
  ->get();

  // unlike must the matching filter score will be ignore
```

#####Nested Query
```php
$contain = 'foo';

Post::search()
->multiMatch(['title', 'body'], $contain)
->nested('tags', function (SearchBuilder $builder) use ($contain) {
    $builder->match('tags.name', $contain);
});
```

>Check out this [documentation](docs/aggregation.md) of supported search queries within plastic and how to apply unsupported queries.

###<a name="aggregation"/>Aggregation</a>
```php
$result = User::search()
  ->match('bio','elastic')
  ->aggregate(function(AggregationBuilder $builder){
    $builder->average('average_age','age');
  });

$aggregations = $result->aggregations();
```
>Check out this [documentation](docs/aggregation.md) of supported aggregations within plastic and how to apply unsupported aggregations.

###<a name="suggestions"/>Suggestions</a>
```php
Plastic::suggest()->completion('tag_suggest', 'photo')->get();
```
suggestions query builder can also be accessed directly from the model as follows
```php
Tag::suggest()->term('tag_term','admin')->get();
```

###<a name="mappings"/>Mapping Model</a>

Mappings are an important aspect of elastic we can compare them to indexing in SQL databases. Mapping our models yields to better search results and allows us to use some special query functions like nested and suggestions.

##### Generate a Model Mapping

```bash
php artisan make:mapping 'App\User'
```
The new mapping will be placed in your `database/mappings` directory.

##### Mapping Structure

A mapping class contains a single method `map`. The map method is used to map the given model fields.

Within the `map` method we may use the Plastic Map builder to expressively create fields maps. To learn about all of the methods available on the Map builder, check out this  [documentation](docs/mapping.md). For example, let's look at a sample mapping that creates a Tag model map:

```php
use Sleimanx2\Plastic\Map\Blueprint;
use Sleimanx2\Plastic\Mappings\Mapping;

class AppTag extends Mapping
{
    /**
     * Full name of the model that should be mapped
     *
     * @var string
     */
    protected $model = App\Tag::class;

    /**
     * Run the mapping.
     *
     * @return void
     */
    public function map()
    {
        Map::create($this->getModelType(),function(Blueprint $map){

          $map->string('name')->store('true')->index('analyzed');

          // instead of the fluent syntax we can use the second method argument to fill the attributes
          $map->completion('suggestion',['analyzer' => 'simple', 'search_analyzer'=>'simple'];

        });
    }
}
```

##### Run Mappings
Running the created mappings can be done using the artisan console command.

```bash
php artisan mapping:run
```

##### Updating Mappings

If our update consist of adding a new field mapping we can always update our model map with our new field and run `php artisan mapping:rerun`.

The mapping for existing fields cannot be updated or deleted. So we need to use one of below technique to update existing fields .

1- Create a new index

You can always create a new Elasticsearch index and re-run the mappings.
After running the mappings you can use the `bulkSave` method to sync your SQL data with Elasticsearch.

2- Using aliases

Its recommended to create your Elasticsearch index with an alias to ease the process of updating mapping your models with zero downtime more to read.

https://www.elastic.co/blog/changing-mapping-with-zero-downtime

> We can access the elastic client to manage our index and aliases as follow `$client = Plastic::getClient()`

## Contributing

Thank you for contributing, The contribution guide can be found [Here](CONTRIBUTING.md).

## License

Plastic is open-sourced software licensed under the [MIT license](LICENSE.md).

## To Do

######Search Query Builder

[] implement Boosting query

[] implement ConstantScore query

[] implement DisMaxQuery query

[] implement MoreLikeThis query (with raw eloquent models)

[] implement GeoShape query

######Aggregation Query Builder

[] implement Nested aggregation

[] implement ExtendedStats aggregation

[] implement TopHits aggregation

######Mapping

[] Find a seamless way to update field mappings with zero downtime with aliases

######Overall

[] Better query builder documentation
