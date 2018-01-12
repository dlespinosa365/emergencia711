<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historiaclinicas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('enfermero_id')->unsigned();
            $table->foreign('enfermero_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('medico_id')->unsigned();
            $table->foreign('medico_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('chofer_id')->unsigned();
            $table->foreign('chofer_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('movil')->unsigned();
            $table->integer('numero_llamado')->unsigned();
            $table->integer('clave_salida')->unsigned();
            $table->string('convenio');
            $table->text('motivo_consulta')->nullable();
            //medicacion
            $table->text('medicacion')->nullable();
            //antecedentes
            $table->boolean('antecedentes_diabetes')->default(false);
            $table->boolean('antecedentes_asma')->default(false);
            $table->boolean('antecedentes_epoc')->default(false);
            $table->boolean('antecedentes_neoplasia')->default(false);
            $table->boolean('antecedentes_hta')->default(false);
            $table->boolean('antecedentes_cisquemica')->default(false);
            $table->boolean('antecedentes_insufcard')->default(false);
            $table->boolean('antecedentes_arritmia')->default(false);
            $table->boolean('antecedentes_icvasc')->default(false);
            $table->boolean('antecedentes_ave')->default(false);
            $table->boolean('antecedentes_alergias')->default(false);
            $table->boolean('antecedentes_otros')->default(false);
            $table->boolean('antecedentes_ninguno')->default(false);
            $table->text('antecedentes_texto')->nullable();
            ////piel y mucosa
            $table->boolean('pielmucosa_palidez')->default(false);
            $table->boolean('pielmucosa_cianosis')->default(false);
            $table->boolean('pielmucosa_sudoracion')->default(false);
            $table->boolean('pielmucosa_livideces')->default(false);
            $table->boolean('pielmucosa_ictericia')->default(false);
            $table->boolean('pielmucosa_edemas')->default(false);
            $table->boolean('pielmucosa_normal')->default(false);
            $table->text('pielmucosa_texto')->nullable();
            ///examen neurologico
            $table->string('neurologico_pupilas')->nullable();
            $table->string('neurologico_smening')->nullable();
            $table->string('neurologico_pcranean')->nullable();
            $table->string('neurologico_sespinal')->nullable();
            $table->time('neurologico_glascow_hora1');
            $table->time('neurologico_glascow_hora2');
            $table->integer('neurologico_glascow_o1', false, true);
            $table->integer('neurologico_glascow_o2', false, true);
            $table->integer('neurologico_glascow_v1', false, true);
            $table->integer('neurologico_glascow_v2', false, true);
            $table->integer('neurologico_glascow_m1', false, true);
            $table->integer('neurologico_glascow_m2', false, true);
            $table->integer('neurologico_glascow_total1', false, true)->default(0);
            $table->integer('neurologico_glascow_total2', false, true)->default(0);
            $table->boolean('neurologico_normal')->default(false);
            //cardio vascular
            $table->boolean('cardiovascular_taquicardia')->default(false);
            $table->boolean('cardiovascular_bradicardia')->default(false);
            $table->boolean('cardiovascular_rirregular')->default(false);
            $table->boolean('cardiovascular_galope')->default(false);
            $table->boolean('cardiovascular_parocardioresp')->default(false);
            $table->string('cardiovascular_soplos', 10);//hacer con radios
            $table->boolean('cardiovascular_iyugular')->default(false);
            $table->boolean('cardiovascular_edemasmmii')->default(false);
            $table->boolean('cardiovascular_normal')->default(false);
            $table->boolean('cardiovascular_angor')->default(false);
            $table->text('cardiovascular_pulsoperifer')->nullable();
            $table->text('cardiovascular_otros')->nullable();
            //respiratorio
            $table->boolean('respiratorio_tbronquitis')->default(false);
            $table->boolean('respiratorio_puntadadelado')->default(false);
            $table->boolean('respiratorio_hemopitises')->default(false);
            $table->boolean('respiratorio_cextrano')->default(false);
            $table->text('respiratorio_texto')->nullable();
            $table->boolean('respiratorio_normal')->default(false);
            $table->boolean('respiratorio_disnea')->default(false);
            $table->string('respiratorio_estcrep')->nullable();
            $table->string('respiratorio_estscrep')->nullable();
            $table->string('respiratorio_sibilancias')->nullable();
            $table->string('respiratorio_roncus')->nullable();
            $table->string('respiratorio_mvausente')->nullable();
            $table->string('respiratorio_soplo')->nullable();
            //abdomen
            $table->boolean('abdomen_nauseas')->default(false);
            $table->boolean('abdomen_vomitos')->default(false);
            $table->boolean('abdomen_dolorpal')->default(false);
            $table->boolean('abdomen_distabd')->default(false);
            $table->boolean('abdomen_defensa')->default(false);
            $table->string('abdomen_rha')->nullable();
            $table->boolean('abdomen_hemorragdig')->default(false);
            $table->boolean('abdomen_hernia')->default(false);
            $table->boolean('abdomen_hepaton')->default(false);
            $table->boolean('abdomen_esplenomeg')->default(false);
            $table->boolean('abdomen_cagabd')->default(false);
            $table->boolean('abdomen_normal')->default(false);
            $table->text('abdomen_text')->nullable();
            //urugenital
            $table->boolean('urugenital_normal')->default(false);
            $table->boolean('urugenital_hematuria')->default(false);
            $table->boolean('urugenital_orturvias')->default(false);
            $table->boolean('urugenital_gvesical')->default(false);
            $table->boolean('urugenital_svesical')->default(false);
            $table->string('urugenital_guyon')->default(false);
            $table->text('urugenital_text')->nullable();
            //ginecobstet
            $table->boolean('ginecobstet_normal')->default(false);
            $table->boolean('ginecobstet_embarazo')->default(false);
            $table->boolean('ginecobstet_amenazapp')->default(false);
            $table->boolean('ginecobstet_aaborto')->default(false);
            $table->boolean('ginecobstet_roturapm')->default(false);
            $table->boolean('ginecobstet_dolhipog')->default(false);
            $table->boolean('ginecobstet_genitor')->default(false);
            $table->boolean('ginecobstet_flujo')->default(false);
            $table->text('ginecobstet_text')->nullable();
            //siquiatrico
            $table->boolean('siquiatrico_iae')->default(false);
            $table->boolean('siquiatrico_normal')->default(false);
            $table->boolean('siquiatrico_angustia')->default(false);
            $table->boolean('siquiatrico_depresion')->default(false);
            $table->boolean('siquiatrico_agresivo')->default(false);
            $table->boolean('siquiatrico_psicdelag')->default(false);
            //osteorarticular
            $table->boolean('osteorarticular_normal')->default(false);
            $table->text('osteorarticular_text')->nullable();
            //signosvitales
            $table->time('signosvitales_hora1');
            $table->time('signosvitales_hora2');
            $table->time('signosvitales_hora3');
            $table->integer('signosvitales_pas1', false, true)->nullable();
            $table->integer('signosvitales_pas2', false, true)->nullable();
            $table->integer('signosvitales_pas3', false, true)->nullable();
            $table->integer('signosvitales_pad1', false, true)->nullable();
            $table->integer('signosvitales_pad2', false, true)->nullable();
            $table->integer('signosvitales_pad3', false, true)->nullable();
            $table->float('signosvitales_temp1')->nullable();
            $table->float('signosvitales_temp2')->nullable();
            $table->float('signosvitales_temp3')->nullable();
            $table->integer('signosvitales_frcard1', false, true)->nullable();
            $table->integer('signosvitales_frcard2', false, true)->nullable();
            $table->integer('signosvitales_frcard3', false, true)->nullable();
            $table->integer('signosvitales_frres1', false, true)->nullable();
            $table->integer('signosvitales_frres2', false, true)->nullable();
            $table->integer('signosvitales_frres3', false, true)->nullable();
            //procedimientos
            $table->text('procedimientos_text')->nullable();
            $table->boolean('procedimientos_ninguno')->default(false);
            //medicacion
            $table->text('medicacion_text')->nullable();
            $table->boolean('medicacion_ninguna')->default(false);
            //informe
            $table->text('informe_text')->nullable();
            //diagnostico_presuntivo
            $table->string('diagnostico_presuntivo_codigo1')->nullable();
            $table->string('diagnostico_presuntivo_codigo2')->nullable();
            $table->text('diagnostico_presuntivo_uno')->nullable();
            $table->text('diagnostico_presuntivo_dos')->nullable();
            //desenlace
            $table->boolean('desenlace_domicilio')->default(false);
            $table->boolean('desenlace_puerta')->default(false);
            $table->boolean('desenlace_cti')->default(false);
            $table->boolean('desenlace_rechazaint')->default(false);
            $table->boolean('desenlace_fallece')->default(false);
            $table->boolean('desenlace_llamadofalso')->default(false);
            $table->string('desenlace_instituciondeinternacion')->nullable();
            //evolucion
            $table->string('evolucion_evolucion')->nullable();
            //clasificacion del llamado
            $table->string('clasificaciondelllamados')->nullable();
            //ensuma
            $table->mediumText('ensuma')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
