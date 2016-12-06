<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         DB::table('languages')->insert(['strNombre' => 'es','strDescripcion' => 'español',]);

         DB::table('ubicacions')->insert(['title' => 'house','latitud' => '20.017192599999998','longitud' => '-99.340398',]);

         DB::table('sectors')->insert(['strDescripcion' => 'Aeroespacial',]);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Agroindustrial']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Agropecuario y Pesca']);
		 DB::table('sectors')->insert(['strDescripcion' => 'Apoyo a los Negocios']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Automotriz']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Automotriz y Autopartes']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Biomasa']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Biotecnología']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Biotecnología Marina']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Biotecnología y Alimentos']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Cinematográfico']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Comunicación y Medios']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Cuero-Calzado Proveduría']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Diseño y Moda']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Educación']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Electrodomésticos']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Electrónicos']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Electrónicos y Productos Electrónicos']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Energía Renovable']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Energía Verdes y Alternativas']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Energías Alternativas']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Equipo Médico']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Equipo y Servicio Aeroespacial']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Farmacéuticos y Cosméticos']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Gobierno']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Gourmet']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Industria Creativa']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Industria Cultural']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Industria Electrónica']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Industrial Naval']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Innovación']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Logístico / Logística']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Maquinaria y Equipo']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Metalmecánica']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Minería']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Minería y Productos no Metálicos']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Moda']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Muebles y Decoración']);								
		 DB::table('sectors')->insert(['strDescripcion' => 'Productos Agropecuarios y Agrícolas']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Productos Biofarmacéticos']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Productos de Madera']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Productos de Madera Biomasa']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Productos de Plástico']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Productos para la Construcción']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Productos Químicos']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Productos Químicos y Petroquímicos']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Puertos']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Químicos y petroquímicos']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Restaurantes']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Robótica']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Servicios de Información']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Servicios de Investigación']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Servicios de Salud']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Servicios Financieros Especializados']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Servicios Médicos']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Servicios Profesionales de Investigación e Innovación']);
		 DB::table('sectors')->insert(['strDescripcion' => 'Tecnologías de la información']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Textil']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Textil y Confección']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Turismo Médico']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Turístico']);				
		 DB::table('sectors')->insert(['strDescripcion' => 'Vivienda y Construcción']);
			
		 DB::table('servicios')->insert(['strDescripcion' => 'diseño de aeronaves', 'sector_id' => 1]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'diseño de naves espaciales', 'sector_id' => 1]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'diseño de cohetes', 'sector_id' => 1]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'equipos de propulcion aerea', 'sector_id' => 1]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'sistemas de navegación aerea', 'sector_id' => 1]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'abastecimiento de materiales militares', 'sector_id' => 1]);	

		 DB::table('servicios')->insert(['strDescripcion' => 'disño de aeronaves', 'sector_id' => 2]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'disñ de naves espaciales', 'sector_id' => 2]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'disñde cohetes', 'sector_id' => 2]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'equis de propulcion aerea', 'sector_id' => 3]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'sists de navegación aerea', 'sector_id' => 4]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'abasento de materiales militares', 'sector_id' => 5]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'diseo de aeronaves', 'sector_id' => 7]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'dise naves espaciales', 'sector_id' => 6]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'diseohetes', 'sector_id' => 8]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'equie propulcion aerea', 'sector_id' => 9]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'sists de navegación aerea', 'sector_id' => 10]);	
		 DB::table('servicios')->insert(['strDescripcion' => 'abasecimiento de materiales militares', 'sector_id' => 11]);	
		 
    }
}
