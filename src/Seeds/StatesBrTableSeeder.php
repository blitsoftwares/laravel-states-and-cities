<?php

namespace Blit\StatesAndCities\Seeds;

use Blit\StatesAndCities\Models\Country;
use Blit\StatesAndCities\Models\State;
use Illuminate\Database\Seeder;

class StatesBrTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country_id = Country::where('code_iso2','BR')->first()->id;

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>12,
            'name'=>'Acre',
            'code'=>'AC'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>27,
            'name'=>'Alagoas',
            'code'=>'AL'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>16,
            'name'=>'Amapá',
            'code'=>'AP'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>13,
            'name'=>'Amazonas',
            'code'=>'AM'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>29,
            'name'=>'Bahia',
            'code'=>'BA'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>23,
            'name'=>'Ceará',
            'code'=>'CE'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>53,
            'name'=>'Distrito Federal',
            'code'=>'DF'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>32,
            'name'=>'Espírito Santo',
            'code'=>'ES'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>52,
            'name'=>'Goiás',
            'code'=>'GO'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>21,
            'name'=>'Maranhão',
            'code'=>'MA'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>51,
            'name'=>'Mato Grosso',
            'code'=>'MT'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>50,
            'name'=>'Mato Grosso do Sul',
            'code'=>'MS'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>31,
            'name'=>'Minas Gerais',
            'code'=>'MG'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>15,
            'name'=>'Pará',
            'code'=>'PA'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>25,
            'name'=>'Paraíba',
            'code'=>'PB'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>41,
            'name'=>'Paraná',
            'code'=>'PR'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>26,
            'name'=>'Pernambuco',
            'code'=>'PE'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>22,
            'name'=>'Piauí',
            'code'=>'PI'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>33,
            'name'=>'Rio de Janeiro',
            'code'=>'RJ'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>24,
            'name'=>'Rio Grande do Norte',
            'code'=>'RN'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>43,
            'name'=>'Rio Grande do Sul',
            'code'=>'RS'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>11,
            'name'=>'Rondônia',
            'code'=>'RO'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>14,
            'name'=>'Roraima',
            'code'=>'RR'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>42,
            'name'=>'Santa Catarina',
            'code'=>'SC'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>35,
            'name'=>'São Paulo',
            'code'=>'SP'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>28,
            'name'=>'Sergipe',
            'code'=>'SE'
        ] );

        State::firstOrCreate( [
            'country_id'=> $country_id,
            'ibge'=>17,
            'name'=>'Tocantins',
            'code'=>'TO'
        ] );
    }
}
