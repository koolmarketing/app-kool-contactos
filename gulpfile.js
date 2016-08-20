var elixir = require('laravel-elixir');

elixir(function(mix) {

    mix.copy('node_modules/vue/dist/vue.js', 'resources/assets/js/');
    mix.copy('node_modules/vue-resource/dist/vue-resource.js', 'resources/assets/js/');
    mix.copy('node_modules/moment/min/moment.min.js', 'resources/assets/js/');
    mix.copy('node_modules/vue-datetime-picker/dist/vue-datetime-picker.min.js','public/js/')

    


	mix.scripts([
		'vue.js',
		'vue-resource.js',
		'moment.min.js',
		], 'public/js/vendor.js');

});