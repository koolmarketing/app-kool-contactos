<?php

use Illuminate\Database\Seeder;

class RetencionFuente2016Table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$data = [
    	['Compras generales (declarantes)',
    	27,
    	'803000',
    	2.50
    	],
    	['Compras generales (no declarantes)',
    	27,
    	'803000',
    	3.50
    	],
    	['Compras con tarjeta débito o crédito',
    	0,
    	'100%',
    	1.50
    	],
    	['Compras de bienes o productos agrícolas o pecuarios sin procesamiento industrial',
    	92,
    	'2737000',
    	1.50
    	],
    	['Compras de bienes o productos agrícolas o pecuarios con procesamiento industrial (declarantes)',
    	27,
    	'803000',
    	2.50
    	],
    	['Compras de bienes o productos agrícolas o pecuarios con procesamiento industrial declarantes (no declarantes)',
    	27,
    	'803000',
    	3.50
    	],
    	['Compras de café pergamino o cereza',
    	160,
    	'4760000',
    	0.50
    	],
    	['Compras de combustibles derivados del petróleo',
    	0,
    	'100%',
    	0.10
    	],
    	['Enajenación de activos fijos de personas naturales (notarías y tránsito son agentes retenedores)',
    	0,
    	'100%',
    	1
    	],
    	['Compras de vehículos',
    	0,
    	'100%',
    	1
    	],
    	['Compras de bienes raíces cuya destinación y uso sea vivienda de habitación (por las primeras 20.000 UVT, es decir hasta $549.700.000)',
    	0,
    	'100%',
    	1],[
    	'Compras  de bienes raíces cuya destinación y uso sea vivienda de habitación (exceso de las primeras 20.000 UVT, es decir superior a $565.580.000)',
    	20000,
    	'595060000',
    	2.5
    	],[
    	'Compras  de bienes raíces cuya destinación y uso sea distinto a vivienda de habitación',
    	0,
    	'100%',
    	2.5
    	],
    	[
    	'Servicios generales (declarantes)',
    	4,
    	'119000',
    	4
    	],
    	[
    	'Servicios generales (no declarantes)',
    	4,
    	'119000',
    	6
    	],[
    	'Por emolumentos eclesiásticos (declarantes)',
    	27,
    	'803000',
    	4
    	],[
    	'Por emolumentos eclesiásticos (no declarantes)',
    	27,
    	'803000',
    	3.5
    	],
    	[
    	'Servicios de transporte de carga',
    	4,
    	'119000',
    	1    	],
    	['Servicios de  transporte nacional de pasajeros por vía terrestre (declarantes)',
    	27,
    	'803000',
    	3.5
    	],[
    	'Servicios de  transporte nacional de pasajeros por vía terrestre (no declarantes)',
    	27,
    	'803000',
    	3.5  	],
    	[
    	'Servicios de  transporte nacional de pasajeros por vía terrestre (no declarantes)',
    	27,
    	'803000',
    	3.5
    	],[
    	'Servicios de  transporte nacional de pasajeros por vía aérea o marítima',
    	4,
    	'119000',
    	1
    	],[
    	'Servicios prestados por empresas de servicios temporales (sobre AIU)',
    	4,
    	'119000',
    	1],
    	[
    	'Servicios prestados por empresas de vigilancia y aseo (sobre AIU)',
    	4,
    	'119000',
    	2],
    	[
    	'Servicios integrales de salud prestados por IPS',
    	4,
    	'119000',
    	2    	],
    	[
    	'Servicios de hoteles y restaurantes (declarantes)',
    	4,
    	'119000',
    	3.5    	],
    	[
    	'Servicios de hoteles y restaurantes (no declarantes)',
    	4,
    	'119000',
    	3.5    	],
    	['Arrendamiento de bienes muebles',
    	0,
    	'100%',
    	4    	],
    	['Arrendamiento de bienes inmuebles (declarantes)',
    	27,
    	'803000',
    	3.5    	],
    	['Arrendamiento de bienes inmuebles (no declarantes)',
    	27,
    	'803000',
    	3.5    	],
    	['Arrendamiento de bienes inmuebles (no declarantes)',
    	27,
    	'803000',
    	3.5    	],
    	['Otros ingresos tributarios (declarantes)',
    	27,
    	'803000',
    	2.5    	],
    	['Otros ingresos tributarios (no declarantes)',
    	27,
    	'803000',
    	3.5    	],
    	['Pagos o abonos en cuenta gravables realizados a personas naturales clasificadas en la categoría tributaria de empleado',
    	95,
    	'2837000',
    	0    	],
    	['Pagos o abonos en cuenta gravables realizados a personas naturales clasificadas en la categoría tributaria de empleado (tarifa mínima)',
    	128.96,
    	'3837000',
    	0    	],
    	['Honorarios y comisiones (personas jurídicas)',
    	0,
    	'100%',
    	11    	],
    	['Honorarios y comisiones personas naturales que suscriban contrato o cuya sumatoria de los pagos o abonos en cuenta superen las 3.300 UVT',
    	0,
    	'100%',
    	11    	],
    	['Honorarios y comisiones (no declarantes)',
    	0,
    	'100%',
    	10    	],
    	['Servicios de licenciamiento o derecho de uso de software',
    	0,
    	'100%',
    	3.5    	],
    	['Intereses o rendimientos financieros',
    	0,
    	'100%',
    	7    	],
    	['Rendimientos financieros provenientes de títulos de renta fija',
    	0,
    	'100%',
    	4    	],
    	['Loterías, rifas, apuestas y similares',
    	48,
    	'1428000',
    	20    	],
    	['Loterías, rifas, apuestas y similares',
    	5,
    	'149000',
    	3    	],
    	['Contratos de construcción  y urbanización',
    	0,
    	'100%',
    	2    	]
    	];

    	for ($i=0; $i < count($data) ; $i++) { 
    		DB::table('retencion_fuente')->insert(array(
    			'concepto' => $data[$i][0],
    			'base_uvt' => $data[$i][1],
    			'base_pesos' => $data[$i][2],
    			'tarifas' => $data[$i][3]
    			));
    	}    



    }
}
