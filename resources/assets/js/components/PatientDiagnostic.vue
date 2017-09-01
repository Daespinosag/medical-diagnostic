<template>
    <div class="">
        <div class="col-md-12 card">
            <div class="form-group floating-label card-body">
                <div class="col-md-6">
                    <label for="identification_card" class="col-md-3 control-label"><strong>Documento de Identidad: </strong></label>
                    <div class="col-md-4">
                        <input class="form-control " required="" name="identification_card" type="number" id="identification_card" v-model="identification_card">
                        <div class="form-control-line"></div>
                    </div>
                    <button class="btn btn-raised btn-primary btn-inline ink-reaction col-md-4 col-md-offset-1" v-on:click="searchDiagnostics">Buscar</button>
                 </div>
                <div class="col-md-6" v-show="showPatient">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>Documento</td>
                                <td>{{ patient.identification_card }}</td>
                            </tr>
                            <tr>
                                <td>Nombre</td>
                                <td>{{ patient.name + ' '+ patient.last_name_1 + ' '+ patient.last_name_2 }}</td>
                            </tr>
                            <tr>
                                <td>correo</td>
                                <td>{{ patient.email }}</td>
                            </tr>
                            <tr>
                                <td>genero</td>
                                <td>{{ patient.gender }}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <br><br>

        <div class="col-md-12">
            <div v-show="displayErrors">
                <div class="col-lg-8 col-lg-offset-3">
                    <ul>
                        <li v-for="error in errors" class="text-danger">{{ error }}</li>
                    </ul>
                </div>
            </div>

            <div v-show="showDiagnosis">
                <div class="col-md-10 col-lg-offset-1" v-for="(diagnosticItem, diagnosticIndex) in diagnostics">
                    <div class="card">
                        <div class="card-head card-bordered style-primary">
                            <header><i class="fa fa-fw fa-tag"></i>Diagnóstico caso {{ diagnosticIndex }}</header>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <td>Diagnóstico</td>
                                    <td>Nivel</td>
                                    <td>Fecha</td>
                                </tr>
                                </thead>
                                <tbody class="">
                                    <tr class="" v-for="diagnostic in diagnosticItem">
                                    <td>{{ diagnostic.diagnosis_name }}</td>
                                    <td>{{ diagnostic.response }}</td>
                                    <td>{{ diagnostic.date }}</td>
                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return{
                identification_card : null,
                showDiagnosis : false,
                showPatient:false,
                displayErrors : false,
                errors: [],
                diagnostics : [],
                patient: [

                ],

            }
        },
        methods: {
            searchDiagnostics(){
                this.showDiagnosis = false;
                this.showPatient = false;
                this.displayErrors = false;
                this.diagnostics = [];
                this.errors = [];
                this.patient = [];

                axios.post(`/consultPatient/getDiagnostics`,
                    {identification_card: this.identification_card}
                ).then(response => {
                    if (response.data.errors.length > 0){
                        this.displayErrors = true;
                        this.errors = response.data.errors;
                    }else {
                        this.showDiagnosis = true;
                        this.showPatient = true;
                        this.diagnostics = response.data.diagnostics;
                        this.patient = response.data.patient;
                    }
                    this.identification_card = null;
                })
            }

        }
    }
</script>
