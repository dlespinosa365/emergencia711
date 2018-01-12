<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoriaClinica extends Model
{
    protected $table = 'historiaclinicas';
    protected $fillable = [
        'enfermero_id',
        'medico_id',
        'chofer_id',
        'cliente_id',
        'movil',
        'numero_llamado',
        'clave_salida',
        'convenio',
        'motivo_consulta',
        'medicacion',
        'antecedentes_diabetes',
        'antecedentes_asma',
        'antecedentes_epoc',
        'antecedentes_neoplasia',
        'antecedentes_hta',
        'antecedentes_cisquemica',
        'antecedentes_insufcard',
        'antecedentes_arritmia',
        'antecedentes_icvasc',
        'antecedentes_ave',
        'antecedentes_ave',
        'antecedentes_alergias',
        'antecedentes_otros',
        'antecedentes_ninguno',
        'antecedentes_texto',
        'pielmucosa_palidez',
        'pielmucosa_cianosis',
        'pielmucosa_sudoracion',
        'pielmucosa_livideces',
        'pielmucosa_ictericia',
        'pielmucosa_edemas',
        'pielmucosa_normal',
        'pielmucosa_texto',
        'neurologico_pupilas',
        'neurologico_smening',
        'neurologico_pcranean',
        'neurologico_sespinal',
        'neurologico_glascow_hora1',
        'neurologico_glascow_hora2',
        'neurologico_glascow_o1',
        'neurologico_glascow_o2',
        'neurologico_glascow_v1',
        'neurologico_glascow_v2',
        'neurologico_glascow_m1',
        'neurologico_glascow_m2',
        'neurologico_glascow_total1',
        'neurologico_glascow_total2',
        'neurologico_normal',
        'cardiovascular_taquicardia',
        'cardiovascular_bradicardia',
        'cardiovascular_rirregular',
        'cardiovascular_galope',
        'cardiovascular_parocardioresp',
        'cardiovascular_soplos',
        'cardiovascular_iyugular',
        'cardiovascular_edemasmmii',
        'cardiovascular_normal',
        'cardiovascular_angor',
        'cardiovascular_pulsoperifer',
        'cardiovascular_otros',
        'respiratorio_tbronquitis',
        'respiratorio_puntadadelado',
        'respiratorio_hemopitises',
        'respiratorio_cextrano',
        'respiratorio_texto',
        'respiratorio_normal',
        'respiratorio_disnea',
        'respiratorio_estcrep',
        'respiratorio_estscrep',
        'respiratorio_sibilancias',
        'respiratorio_roncus',
        'respiratorio_mvausente',
        'respiratorio_soplo',
        'abdomen_nauseas',
        'abdomen_vomitos',
        'abdomen_dolorpal',
        'abdomen_distabd',
        'abdomen_defensa',
        'abdomen_rha',
        'abdomen_hemorragdig',
        'abdomen_hernia',
        'abdomen_hepaton',
        'abdomen_esplenomeg',
        'abdomen_cagabd',
        'abdomen_normal',
        'abdomen_text',
        'urugenital_normal',
        'urugenital_orturvias',
        'urugenital_gvesical',
        'urugenital_svesical',
        'urugenital_guyon',
        'urugenital_text',
        'ginecobstet_normal',
        'ginecobstet_embarazo',
        'ginecobstet_amenazapp',
        'ginecobstet_aaborto',
        'ginecobstet_roturapm',
        'ginecobstet_dolhipog',
        'ginecobstet_genitor',
        'ginecobstet_flujo',
        'ginecobstet_text',
        'siquiatrico_iae',
        'siquiatrico_normal',
        'siquiatrico_angustia',
        'siquiatrico_depresion',
        'siquiatrico_agresivo',
        'siquiatrico_psicdelag',
        'osteorarticular_normal',
        'osteorarticular_psicdelag',
        'signosvitales_hora1',
        'signosvitales_hora2',
        'signosvitales_hora3',
        'signosvitales_pas1',
        'signosvitales_pas2',
        'signosvitales_pas3',
        'signosvitales_pad1',
        'signosvitales_pad2',
        'signosvitales_pad3',
        'signosvitales_temp1',
        'signosvitales_temp2',
        'signosvitales_temp3',
        'signosvitales_frcard1',
        'signosvitales_frcard2',
        'signosvitales_frcard3',
        'signosvitales_frres1',
        'signosvitales_frres2',
        'signosvitales_frres3',
        'procedimientos_text',
        'procedimientos_ninguno',
        'medicacion_text',
        'medicacion_ninguna',
        'informe_text',
        'diagnostico_presuntivo_codigo1',
        'diagnostico_presuntivo_codigo2',
        'diagnostico_presuntivo_uno',
        'diagnostico_presuntivo_dos',
        'desenlace_domicilio',
        'desenlace_puerta',
        'desenlace_cti',
        'desenlace_rechazaint',
        'desenlace_fallece',
        'desenlace_llamadofalso',
        'desenlace_instituciondeinternacion',
        'evolucion_evolucion',
        'clasificaciondelllamados',
        'ensuma'
    ];


    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }


    public function medico()
    {
        return $this->belongsTo(User::class);
    }

    public function enfermero()
    {
        return $this->belongsTo(User::class);
    }

    public function chofer()
    {
        return $this->belongsTo(User::class);
    }

   
    public function getcreateAtAttribute($value)
    {
        $date = \Carbon\Carbon::parse($value);
        return $date->toDateString();
    }

    /**
     * @return array
     */
    public function getneurologicoGlascowHora1Attribute($value)
    {
        $date = \Carbon\Carbon::parse($value);
        return $date->format('H:i');
    }

    public function getneurologicoGlascowHora2Attribute($value)
    {
        $date = \Carbon\Carbon::parse($value);
        return $date->format('H:i');
    }


}
