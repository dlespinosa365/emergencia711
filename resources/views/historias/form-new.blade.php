<div class="row">
    <div class="col-md-7">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <b>{!! Form::label('enfermero_id', 'Enfermero')!!}</b>
                    <p> {!! Form::select('enfermero_id', $enfermeros , old('enfermero_id') ,['required','class' => 'form-control']) !!}</p>
                </div>
                <div class="col-md-2">
                    <b>{!! Form::label('chofer_id', 'Chofer')!!}</b>
                    <p> {!! Form::select('chofer_id', $choferes , old('chofer_id') ,['required','class' => 'form-control']) !!}</p>
                </div>

                <div class="col-md-2">
                    <b>{!! Form::label('movil', 'Movil')!!}</b>
                    <p> {!! Form::number('movil' , old('movil') ,['required','class' => 'form-control']) !!}</p>

                </div>
            </div>

        </div>
    </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-12">
                <b>{!! Form::label('numero_llamado', 'Numero de LLamado')!!}</b>
                <p> {!! Form::number('numero_llamado' , old('numero_llamado') ,['required','class' => 'form-control']) !!}</p>
            </div>

            <div class="col-md-12">
                <b>{!! Form::label('convenio', 'Convenio')!!}</b>
                <p> {!! Form::select('convenio' ,config('data.convenios') ,old('convenio') ,['required','class' => 'form-control']) !!}</p>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="row">
            <div class="col-md-12">
                <b>{!! Form::label('clave_salida', 'Clave Salida')!!}</b>
                <p> {!! Form::select('clave_salida' ,config('data.clave_salida') ,old('convenio') ,['required','class' => 'form-control']) !!}</p>
            </div>

        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h3>Antecedentes</h3>
                <p class="pull-right">
                    {!! Form::label('antecedentes_ninguno', 'NINGUNO')!!}
                    <b>{!! Form::checkbox('antecedentes_ninguno', 1, old('antecedentes_ninguno')) !!}</b>

                </p>
            </div>
            <div class="col-md-4">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('antecedentes_diabetes', 'DIABETES')!!}</td>
                        <td>{!! Form::checkbox('antecedentes_diabetes', 1, old('antecedentes_diabetes')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('antecedentes_asma', 'ASMA')!!}</td>
                        <td> {!! Form::checkbox('antecedentes_asma', 1 , old('antecedentes_asma')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('antecedentes_epoc', 'EPOC')!!}</td>
                        <td>{!! Form::checkbox('antecedentes_epoc',  1 ,old('antecedentes_epoc')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('antecedentes_neoplasia', 'NEOPLACIA')!!}</td>
                        <td> {!! Form::checkbox('antecedentes_neoplasia', 1 , old('antecedentes_neoplasia')) !!}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('antecedentes_hta', 'H.T.A.')!!}</td>
                        <td>{!! Form::checkbox('antecedentes_hta',  1 ,old('antecedentes_hta')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('antecedentes_cisquemica', 'CISQUEMIA')!!}</td>
                        <td>{!! Form::checkbox('antecedentes_cisquemica',  1 ,old('antecedentes_cisquemica')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('antecedentes_insufcard', 'INDUF. CARD')!!}</td>
                        <td>{!! Form::checkbox('antecedentes_insufcard', 1 , old('antecedentes_insufcard')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('antecedentes_arritmia', 'ARRITMIA')!!}</td>
                        <td>{!! Form::checkbox('antecedentes_arritmia',  1 ,old('antecedentes_arritmia')) !!}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('antecedentes_icvasc', 'I.C. VASC.')!!}</td>
                        <td>{!! Form::checkbox('antecedentes_icvasc', 1 , old('antecedentes_hta')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('antecedentes_ave', 'A.V.E.')!!}</td>
                        <td>{!! Form::checkbox('antecedentes_ave', 1 , old('antecedentes_ave')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('antecedentes_alergias', 'ALERGIAS')!!}</td>
                        <td>{!! Form::checkbox('antecedentes_alergias', 1 , old('antecedentes_alergias')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('antecedentes_otros', 'OTROS')!!}</td>
                        <td>{!! Form::checkbox('antecedentes_otros',  1 ,old('antecedentes_otros')) !!}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h3>Medicacion</h3>
                {!! Form::textarea('medicacion',  old('medicacion'), ['class' => 'form-control']) !!}
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h3>Piel y Mucosa</h3>
                <p class="pull-right">
                    {!! Form::label('pielmucosa_normal', 'NORMAL')!!}
                    {!! Form::checkbox('pielmucosa_normal', 1 ,old('pielmucosa_normal')) !!}

                </p>
            </div>
            <div class="col-md-4">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('pielmucosa_palidez', 'PALIDEZ')!!}</td>
                        <td>{!! Form::checkbox('pielmucosa_palidez',  1 ,old('pielmucosa_palidez')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('pielmucosa_cianosis', 'CIANOSIS')!!}</td>
                        <td>{!! Form::checkbox('pielmucosa_cianosis',  1 ,old('pielmucosa_cianosis')) !!}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('pielmucosa_sudoracion', 'SUDORACION')!!}</td>
                        <td>{!! Form::checkbox('pielmucosa_sudoracion',  1 ,old('pielmucosa_sudoracion')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('pielmucosa_livideces', 'LIVIDECES')!!}</td>
                        <td>{!! Form::checkbox('pielmucosa_livideces',  1 ,old('pielmucosa_livideces')) !!}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('pielmucosa_ictericia', 'ICTERICIA')!!}</td>
                        <td>{!! Form::checkbox('pielmucosa_ictericia',  1 ,old('pielmucosa_ictericia')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('pielmucosa_edemas', 'EDEMAS')!!}</td>
                        <td>{!! Form::checkbox('pielmucosa_edemas',  1 ,old('pielmucosa_edemas')) !!}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12">
                {!! Form::textarea('pielmucosa_texto',  old('pielmucosa_texto'), ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h3>Examen Neurologico</h3>
                <p>
                    {!! Form::label('neurologico_normal', 'NORMAL')!!}
                    {!! Form::checkbox('neurologico_normal', 1 , old('neurologico_normal')) !!}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('neurologico_pupilas', 'PUPILAS')!!}</td>
                        <td>{!! Form::text('neurologico_pupilas',  old('neurologico_pupilas'), ['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('neurologico_smening', 'S. MENING.')!!}</td>
                        <td>{!! Form::text('neurologico_smening',  old('neurologico_smening'), ['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('neurologico_pcranean', 'P. CRANEAN')!!}</td>
                        <td>{!! Form::text('neurologico_pcranean',  old('neurologico_pcranean'), ['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('neurologico_sespinal', 'S. ESPINAL')!!}</td>
                        <td>{!! Form::text('neurologico_sespinal',  old('neurologico_sespinal'), ['class' => 'form-control']) !!}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <tr>
                        <th>Hora</th>
                        <th>O</th>
                        <th>V</th>
                        <th>M</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="bootstrap-timepicker">{!! Form::text('neurologico_glascow_hora1',  old('neurologico_glascow_hora1'), ['class' => 'form-control timepick']) !!}</div>
                        </td>
                        <td>{!! Form::number('neurologico_glascow_o1',  old('neurologico_glascow_o1'), ['class' => 'form-control']) !!}</td>
                        <td>{!! Form::number('neurologico_glascow_v1',  old('neurologico_glascow_v1'), ['class' => 'form-control']) !!}</td>
                        <td>{!! Form::number('neurologico_glascow_m1',  old('neurologico_glascow_m1'), ['class' => 'form-control']) !!}</td>
                        <td>{!! Form::number('neurologico_glascow_total1',  old('neurologico_glascow_total1'), ['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="bootstrap-timepicker">{!! Form::text('neurologico_glascow_hora2',  old('neurologico_glascow_hora2'), ['class' => 'form-control timepick']) !!}</div>
                        </td>
                        <td>{!! Form::number('neurologico_glascow_o2',  old('neurologico_glascow_o2'), ['class' => 'form-control']) !!}</td>
                        <td>{!! Form::number('neurologico_glascow_v2',  old('neurologico_glascow_v2'), ['class' => 'form-control']) !!}</td>
                        <td>{!! Form::number('neurologico_glascow_m2',  old('neurologico_glascow_m2'), ['class' => 'form-control']) !!}</td>
                        <td>{!! Form::number('neurologico_glascow_total2',  old('neurologico_glascow_total2'), ['class' => 'form-control']) !!}</td>
                    </tr>
                </table>
            </div>


        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h3>Cardiovascular</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>
                    {!! Form::label('cardiovascular_normal', 'NORMAL')!!}
                    {!! Form::checkbox('cardiovascular_normal',  1 ,old('cardiovascular_normal')) !!}</b>
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    {!! Form::label('cardiovascular_angor', 'ANGOR')!!}
                    {!! Form::checkbox('cardiovascular_angor',  1 ,old('cardiovascular_angor')) !!}</b>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('cardiovascular_taquicardia', 'TAQUICARDIA')!!}</td>
                        <td>{!! Form::checkbox('cardiovascular_taquicardia', 1 , old('cardiovascular_taquicardia')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('cardiovascular_bradicardia', 'BRADICARDIA')!!}</td>
                        <td>{!! Form::checkbox('cardiovascular_bradicardia',  1 ,old('cardiovascular_bradicardia')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('cardiovascular_rirregular', 'R. IRREULAR')!!}</td>
                        <td>{!! Form::checkbox('cardiovascular_rirregular',  1 ,old('cardiovascular_rirregular')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('cardiovascular_galope', 'GALOPE')!!}</td>
                        <td>{!! Form::checkbox('cardiovascular_galope',  1 ,old('cardiovascular_galope')) !!}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('cardiovascular_parocardioresp', 'PARO CARDIORESP.')!!}</td>
                        <td>{!! Form::checkbox('cardiovascular_parocardioresp',  1 ,old('cardiovascular_parocardioresp')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('cardiovascular_soplos', 'SOPLO')!!}</td>
                        <td>{!! Form::select('cardiovascular_soplos', config('data.soplos') ,old('cardiovascular_soplos'), ['required','class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('cardiovascular_iyugular', 'I. YUGULAR')!!}</td>
                        <td>{!! Form::checkbox('cardiovascular_iyugular',  1 ,old('cardiovascular_iyugular')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('cardiovascular_edemasmmii', 'EDEMAS MMII')!!}</td>
                        <td>{!! Form::checkbox('cardiovascular_edemasmmii',  1 ,old('cardiovascular_edemasmmii')) !!}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12">
                <p>
                    {!! Form::label('cardiovascular_pulsoperifer', 'PULSO PERIFER')!!}
                    {!! Form::text('cardiovascular_pulsoperifer' , old('cardiovascular_pulsoperifer') ,['class' => 'form-control']) !!}

                </p>
            </div>
            <div class="col-md-12">
                <p>
                    {!! Form::label('cardiovascular_otros', 'OTROS')!!}
                    {!! Form::text('cardiovascular_otros' , old('cardiovascular_otros') ,['class' => 'form-control']) !!}

                </p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h3>Respiratorio</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>
                    {!! Form::label('respiratorio_normal', 'NORMAL')!!}
                    {!! Form::checkbox('respiratorio_normal',  1 ,old('respiratorio_normal')) !!}</b>
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    {!! Form::label('respiratorio_disnea', 'DISNEA')!!}
                    {!! Form::checkbox('respiratorio_disnea',  1 ,old('respiratorio_disnea')) !!}</b>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('respiratorio_tbronquitis', 'T.BRONQUITIS')!!}</td>
                        <td>{!! Form::checkbox('respiratorio_tbronquitis' , 1 ,old('respiratorio_tbronquitis')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('respiratorio_puntadadelado', 'PUNTADA DE LADO')!!}</td>
                        <td>{!! Form::checkbox('respiratorio_puntadadelado' , 1 ,old('respiratorio_puntadadelado')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('respiratorio_hemopitises', 'P. HEMOPITISIS.')!!}</td>
                        <td>{!! Form::checkbox('respiratorio_hemopitises',1 , old('respiratorio_hemopitises') ) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('respiratorio_cextrano', 'C. EXTRANO')!!}</td>
                        <td>{!! Form::checkbox('respiratorio_cextrano' , 1 ,old('respiratorio_cextrano')) !!}</td>
                    </tr>
                </table>
                <p>
                    {!! Form::textarea('respiratorio_texto' , old('respiratorio_texto') ,['class' => 'form-control']) !!}
                </p>
            </div>
            <div class="col-md-6">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('respiratorio_estcrep', 'EST. CREP')!!}</td>
                        <td>{!! Form::select('respiratorio_estcrep' , config('data.respiratorio') , old('respiratorio_estcrep'),['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('respiratorio_estscrep', 'EST. S/CREP')!!}</td>
                        <td>{!! Form::select('respiratorio_estscrep' ,config('data.respiratorio') , old('respiratorio_estscrep'),['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('respiratorio_sibilancias', 'SIBILANCIAS')!!}</td>
                        <td>{!! Form::select('respiratorio_sibilancias' ,config('data.respiratorio') , old('respiratorio_sibilancias'), ['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('respiratorio_roncus', 'RONCUS')!!}</td>
                        <td>{!! Form::select('respiratorio_roncus' , config('data.respiratorio'), old('respiratorio_roncus') ,['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('respiratorio_mvausente', 'M.V. AUSENTE')!!}</td>
                        <td>{!! Form::select('respiratorio_mvausente' , config('data.respiratorio') , old('respiratorio_mvausente') ,['class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('respiratorio_soplo', 'SOPLO')!!}</td>
                        <td>{!! Form::select('respiratorio_soplo' ,config('data.respiratorio') , old('respiratorio_soplo'), ['class' => 'form-control']) !!}</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h3>Abdomen</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>
                    {!! Form::label('abdomen_normal', 'NORMAL')!!}
                    {!! Form::checkbox('abdomen_normal', 1,  old('abdomen_normal')) !!}</b>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('abdomen_nauseas', 'NAUSEAS')!!}</td>
                        <td>{!! Form::checkbox('abdomen_nauseas',  1 ,old('abdomen_nauseas')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('abdomen_vomitos', 'VOMITOS')!!}</td>
                        <td>{!! Form::checkbox('abdomen_vomitos',  1 ,old('abdomen_vomitos')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('abdomen_dolorpal', 'DOLOR PALP.')!!}</td>
                        <td>{!! Form::checkbox('abdomen_dolorpal',  1 ,old('abdomen_dolorpal')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('abdomen_distabd', 'DIST. ABD')!!}</td>
                        <td>{!! Form::checkbox('abdomen_distabd',  1 ,old('abdomen_distabd')) !!}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('abdomen_defensa', 'DEFENSA')!!}</td>
                        <td>{!! Form::checkbox('abdomen_defensa',  1 ,old('abdomen_defensa')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('abdomen_rha', 'RHA')!!}</td>
                        <td>{!! Form::select('abdomen_rha', config('data.rha') , old('abdomen_rha'), ['required','class' => 'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('abdomen_hemorragdig', 'HEMORRAG. DIG.')!!}</td>
                        <td>{!! Form::checkbox('abdomen_hemorragdig',  1 ,old('abdomen_hemorragdig')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('abdomen_hernia', 'HERNIA')!!}</td>
                        <td>{!! Form::checkbox('abdomen_hernia',  1 ,old('abdomen_hernia')) !!}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('abdomen_hepaton', 'HEPATON')!!}</td>
                        <td>{!! Form::checkbox('abdomen_hepaton',  1 ,old('abdomen_hepaton')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('abdomen_esplenomeg', 'ESPLENOMEG')!!}</td>
                        <td>{!! Form::checkbox('abdomen_esplenomeg',  1 ,old('abdomen_esplenomeg')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('abdomen_cagabd', 'C. AG. ABD')!!}</td>
                        <td>{!! Form::checkbox('abdomen_cagabd',  1 ,old('abdomen_cagabd')) !!}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::textarea('abdomen_text' , old('abdomen_text') ,['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Urugenital</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <P class="pull-right">
                            {!! Form::label('urugenital_normal', 'NORMAL')!!}
                            {!! Form::checkbox('urugenital_normal' , 1 ,old('urugenital_normal')) !!}
                        </P>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tr>
                                <td>{!! Form::label('urugenital_hematuria', 'HEMATURIA')!!}</td>
                                <td>{!! Form::checkbox('urugenital_hematuria',  1 ,old('urugenital_hematuria')) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('urugenital_orturvias', 'OR. TURBIAS')!!}</td>
                                <td>{!! Form::checkbox('urugenital_orturvias', 1 ,old('urugenital_orturvias')) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('urugenital_gvesical', 'G. VESICAL')!!}</td>
                                <td>{!! Form::checkbox('urugenital_gvesical', 1 , old('urugenital_gvesical')) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('urugenital_svesical', 'S. VEGICAL')!!}</td>
                                <td>{!! Form::checkbox('urugenital_svesical', 1 , old('urugenital_svesical')) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('urugenital_guyon', 'GUYON +')!!}</td>
                                <td>{!! Form::select('urugenital_guyon',  config('data.respiratorio') ,old('urugenital_guyon'), ['class'=>'form-control']) !!}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {!! Form::TEXTAREA('urugenital_text',  old('urugenital_text'), ['class'=>'form-control']) !!}
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Ginecobstet</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="pull-right">
                            {!! Form::label('ginecobstet_normal', 'NORMAL')!!}
                            {!! Form::checkbox('ginecobstet_normal',  1 ,old('ginecobstet_normal')) !!}

                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-hover">
                            <tr>
                                <td>{!! Form::label('ginecobstet_embarazo', 'EMBARAZO')!!}</td>
                                <td>{!! Form::checkbox('ginecobstet_embarazo',  1 ,old('ginecobstet_embarazo')) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('ginecobstet_amenazapp', 'AMENAZA P.P.')!!}</td>
                                <td>{!! Form::checkbox('ginecobstet_amenazapp', 1 ,old('ginecobstet_amenazapp')) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('ginecobstet_aaborto', 'A. ABORTO')!!}</td>
                                <td>{!! Form::checkbox('ginecobstet_aaborto',  1 ,old('ginecobstet_aaborto')) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('ginecobstet_roturapm', 'ROTURA P.M.')!!}</td>
                                <td>{!! Form::checkbox('ginecobstet_roturapm',  1 ,old('ginecobstet_roturapm')) !!}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-hover">
                            <tr>
                                <td>{!! Form::label('ginecobstet_dolhipog', 'DOL. HIPOG')!!}</td>
                                <td>{!! Form::checkbox('ginecobstet_dolhipog',  1 ,old('ginecobstet_dolhipog')) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('ginecobstet_genitor', 'GENITOR')!!}</td>
                                <td>{!! Form::checkbox('ginecobstet_genitor', 1 ,old('ginecobstet_genitor')) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('ginecobstet_flujo', 'FLUJO')!!}</td>
                                <td>{!! Form::checkbox('ginecobstet_flujo',  1 ,old('ginecobstet_flujo')) !!}</td>
                            </tr>

                        </table>
                    </div>
                    <div class="col-md-12">
                        {!! Form::TEXTAREA('ginecobstet_text',  old('ginecobstet_text'), ['class'=>'form-control']) !!}
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h3>Siquiatrico</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>
                    {!! Form::label('siquiatrico_iae', 'IAE')!!}
                    {!! Form::checkbox('siquiatrico_iae',  1 ,old('siquiatrico_iae')) !!}
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    {!! Form::label('siquiatrico_normal', 'NORMAL')!!}
                    {!! Form::checkbox('siquiatrico_normal',  1 ,old('siquiatrico_normal')) !!}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <p>
                    {!! Form::label('siquiatrico_angustia', 'ANGUSTIA')!!}
                    {!! Form::checkbox('siquiatrico_angustia',  1 ,old('siquiatrico_angustia')) !!}</b>
                </p>
            </div>
            <div class="col-md-3">
                <p class="">
                    {!! Form::label('siquiatrico_depresion', 'DEPRESION')!!}
                    {!! Form::checkbox('siquiatrico_depresion',  1 ,old('siquiatrico_depresion')) !!}</b>
                </p>
            </div>
            <div class="col-md-3">
                <p class="">
                    {!! Form::label('siquiatrico_agresivo', 'AGRESIVO')!!}
                    {!! Form::checkbox('siquiatrico_agresivo',  1 ,old('siquiatrico_agresivo')) !!}</b>
                </p>
            </div>
            <div class="col-md-3">
                <p class="">
                    {!! Form::label('siquiatrico_psicdelag', 'PSIC. DEL AG.')!!}
                    {!! Form::checkbox('siquiatrico_psicdelag',  1 ,old('siquiatrico_psicdelag')) !!}</b>
                </p>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h3>Osteorarticular</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>
                    {!! Form::label('osteorarticular_normal', 'NORMAL')!!}
                    {!! Form::checkbox('osteorarticular_normal',  1 ,old('osteorarticular_normal')) !!}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>{!! Form::textarea('osteorarticular_text',  old('osteorarticular_text'),['class'=>'form-control']) !!}
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h3>Signo Vitales</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <tr>
                        <th>HORA</th>
                        <th>PAS</th>
                        <th>PAD</th>
                        <th>TEMP</th>
                        <th>FR. CARD</th>
                        <th>FR. RESP</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="bootstrap-timepicker">{!! Form::text('signosvitales_hora1',  old('signosvitales_hora1'),['class'=>'form-control timepick']) !!}</div>
                        </td>
                        <td>{!! Form::number('signosvitales_pas1',  old('signosvitales_pas1'),['class'=>'form-control']) !!}</td>
                        <td>{!! Form::number('signosvitales_pad1',  old('signosvitales_pad1'),['class'=>'form-control']) !!}</td>
                        <td>{!! Form::number('signosvitales_temp1',  old('signosvitales_temp1'),['class'=>'form-control']) !!}</td>
                        <td>{!! Form::number('signosvitales_frcard1',  old('signosvitales_frcard1'),['class'=>'form-control']) !!}</td>
                        <td>{!! Form::number('signosvitales_frres1',  old('signosvitales_frres1'),['class'=>'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="bootstrap-timepicker">
                                {!! Form::text('signosvitales_hora2',  old('signosvitales_hora2'),['class'=>'form-control timepick']) !!}
                            </div>
                        </td>
                        <td>{!! Form::number('signosvitales_pas2',  old('signosvitales_pas2'),['class'=>'form-control']) !!}</td>
                        <td>{!! Form::number('signosvitales_pad2',  old('signosvitales_pad2'),['class'=>'form-control']) !!}</td>
                        <td>{!! Form::number('signosvitales_temp2',  old('signosvitales_temp2'),['class'=>'form-control']) !!}</td>
                        <td>{!! Form::number('signosvitales_frcard2',  old('signosvitales_frcard2'),['class'=>'form-control']) !!}</td>
                        <td>{!! Form::number('signosvitales_frres2',  old('signosvitales_frres2'),['class'=>'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="bootstrap-timepicker">
                                {!! Form::text('signosvitales_hora3',  old('signosvitales_hora3'),['class'=>'form-control timepick']) !!}
                            </div>
                        </td>
                        <td>{!! Form::number('signosvitales_pas3',  old('signosvitales_pas3'),['class'=>'form-control']) !!}</td>
                        <td>{!! Form::number('signosvitales_pad3',  old('signosvitales_pad3'),['class'=>'form-control']) !!}</td>
                        <td>{!! Form::number('signosvitales_temp3',  old('signosvitales_temp3'),['class'=>'form-control']) !!}</td>
                        <td>{!! Form::number('signosvitales_frcard3',  old('signosvitales_frcard3'),['class'=>'form-control']) !!}</td>
                        <td>{!! Form::number('signosvitales_frres3',  old('signosvitales_frres3'),['class'=>'form-control']) !!}</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Procedimientos</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            {!! Form::label('procedimientos_ninguno', 'NINGUNO')!!}
                            {!! Form::checkbox('procedimientos_ninguno', 1 , old('procedimientos_ninguno')) !!}</b>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>{!! Form::textarea('procedimientos_text',  old('procedimientos_text'),['class'=>'form-control']) !!}</b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Medicacion</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            {!! Form::label('medicacion_ninguna', 'NINGUNA')!!}
                            {!! Form::checkbox('medicacion_ninguna',  1 ,old('medicacion_ninguna')) !!}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>{!! Form::textarea('medicacion_text',  old('medicacion_text'),['class'=>'form-control']) !!}</b>
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <h3>Informe E.C.G</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>{!! Form::textarea('informe_text',  old('informe_text'),['class'=>'form-control']) !!}</b>
                </p>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h3>Diagnostico Presuntivo</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('diagnostico_presuntivo_uno', '1')!!}</td>
                        <td>{!! Form::text('diagnostico_presuntivo_uno',  old('diagnostico_presuntivo_uno'),['class'=>'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('diagnostico_presuntivo_dos', '2')!!}</td>
                        <td>{!! Form::text('diagnostico_presuntivo_dos',  old('diagnostico_presuntivo_dos'),['class'=>'form-control']) !!}</td>
                    </tr>
                </table>

            </div>
            <div class="col-md-4">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('diagnostico_presuntivo_codigo1', 'CODIGO')!!}</td>
                        <td>{!! Form::text('diagnostico_presuntivo_codigo1',  old('diagnostico_presuntivo_codigo1'),['class'=>'form-control']) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('diagnostico_presuntivo_codigo2', 'CODIGO')!!}</td>
                        <td>{!! Form::text('diagnostico_presuntivo_codigo2',  old('diagnostico_presuntivo_codigo2'),['class'=>'form-control']) !!}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h3>Desenlace</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('desenlace_domicilio', 'DOMICILIO')!!}</td>
                        <td>{!! Form::checkbox('desenlace_domicilio', 1 , old('desenlace_domicilio')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('desenlace_puerta', 'PUERTA')!!}</td>
                        <td>{!! Form::checkbox('desenlace_puerta', 1 , old('desenlace_puerta')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('desenlace_cti', 'CTI')!!}</td>
                        <td>{!! Form::checkbox('desenlace_cti',  1 ,old('desenlace_cti')) !!}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-hover">
                    <tr>
                        <td>{!! Form::label('desenlace_rechazaint', 'RECHAza INT.')!!}</td>
                        <td>{!! Form::checkbox('desenlace_rechazaint',  1, old('desenlace_rechazaint')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('desenlace_fallece', 'FALLECE')!!}</td>
                        <td>{!! Form::checkbox('desenlace_fallece',  1 ,old('desenlace_fallece')) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('desenlace_llamadofalso', 'LLAMADO FALSO')!!}</td>
                        <td>{!! Form::checkbox('desenlace_llamadofalso',  1 ,old('desenlace_llamadofalso')) !!}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                {!! Form::label('desenlace_instituciondeinternacion', 'INSTITUCION DE INTERNACION')!!}
            </div>
            <div class="col-md-6">
                {!! Form::text('desenlace_instituciondeinternacion',  old('desenlace_instituciondeinternacion'),['class'=>'form-control']) !!}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h3>Evolucion</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table hover">
                    <tr>
                        <td>{!! Form::label('evolucion_evolucion', 'Evolucion')!!}</td>
                        <td>{!! Form::select('evolucion_evolucion',  config('data.evolucion'),old('evolucion_evolucion'),['class'=>'form-control']) !!}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <h3>Clasif. del LLamado</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table hover">
                    <tr>
                        <td>{!! Form::label('clasificaciondelllamados', 'Clasificacion del LLamado')!!}</td>
                        <td>{!! Form::select('clasificaciondelllamados',  config('data.clasificacion_llamado'),old('clasificaciondelllamados'),['class'=>'form-control']) !!}</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <h3>En Suma</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::textarea('ensuma', old('ensuma'),['class'=>'form-control']) !!}
            </div>
        </div>
    </div>


</div>
