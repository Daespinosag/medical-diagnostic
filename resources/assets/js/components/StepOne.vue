<template>
    <div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-head card-head-xs style-primary">
                    <label class="control-label col-md-4">Type Diagnosis</label>
                </div>
                <div class="card-body" v-if="!typesDisplayForm">
                    <div class="form-group col-md-10">
                        <label class="control-label col-md-4">Type Diagnosis</label>
                        <select class="form-control col-md-8" v-model="typesSelected" v-on:change="loadDiagnosis">
                            <option v-for="typesOption in typesOptions" v-bind:value="typesOption.id">
                                {{ typesOption.name }}
                             </option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-raised btn-primary btn-inline ink-reaction" v-on:click="stateTypeDiagnosis" >New</button>
                    </div>
                </div>
                <div class="" v-show="typesDisplayForm">
                    <div class="col-md-12">
                        <section>
                            <div class="form-group ">
                                <label for="name" class="col-md-2 control-label">Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" required="" name="name" type="text" id="name" v-model="typeDiagnosisName"><div class="form-control-line"></div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="description" class="col-md-2 control-label">Description</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" required="" name="description" cols="15" rows="10" id="description" v-model="typeDiagnosisDescription"></textarea><div class="form-control-line"></div>
                                </div>
                            </div>
                        </section>
                        <div class="card-actionbar-row">
                            <a class="btn btn-raised btn-default btn-inline ink-reaction" v-on:click="stateTypeDiagnosis">Cancel</a>
                            <button class="btn btn-raised btn-primary btn-inline ink-reaction" v-on:click="saveTypeDiagnosis">Save</button>
                        </div>
                    </div>
                </div>
                <span> Selected: {{ typesSelected }}</span>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-1">
            <div class="card">
                <div class="card-head card-head-xs style-primary">
                    <label class="control-label col-md-4">Diagnosis</label>
                </div>
                <div class="card-body" v-if="!diagnosisDisplayForm">
                    <div class="form-group col-md-10">
                        <label class="control-label col-md-4">Diagnosis</label>
                        <select class="form-control col-md-8" v-model="diagnosisSelected">
                            <option v-for="diagnosisOption in diagnosisOptions" v-bind:value="diagnosisOption.id">
                                {{ diagnosisOption.name }}
                             </option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-raised btn-primary btn-inline ink-reaction" v-on:click="stateDiagnosis" v-show="buttonDiagnosisDisplay">New</button>
                    </div>
                </div>

                <div class="" v-show="diagnosisDisplayForm">
                    <div class="col-md-12">
                        <section>
                            <div class="form-group ">
                                <label for="name" class="col-md-2 control-label">Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" required="" name="name" type="text"  v-model="diagnosisName"><div class="form-control-line"></div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="description" class="col-md-2 control-label">Description</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" required="" name="description" cols="15" rows="10"  v-model="diagnosisDescription"></textarea><div class="form-control-line"></div>
                                </div>
                            </div>
                        </section>
                        <div class="card-actionbar-row">
                            <a class="btn btn-raised btn-default btn-inline ink-reaction" v-on:click="stateDiagnosis">Cancel</a>
                            <button class="btn btn-raised btn-primary btn-inline ink-reaction" v-on:click="saveDiagnosis">Save</button>
                        </div>
                    </div>
                </div>

                <span> Selected: {{ diagnosisSelected }}</span>
            </div>
        </div>


    </div>
</template>

<script>
    export default {
        data() {
            return{
                typesSelected: null,
                diagnosisSelected: null,
                typesDisplayForm: false,
                diagnosisDisplayForm: false,
                buttonDiagnosisDisplay: false,
                typeDiagnosisName: '',
                diagnosisName: '',
                typeDiagnosisDescription: '',
                diagnosisDescription: '',
                typesOptions: [],
                diagnosisOptions: []
            }
        },
        methods: {
            stateTypeDiagnosis() {
                this.typesDisplayForm = !this.typesDisplayForm;
            },
            saveTypeDiagnosis(){
                axios.post(
                    `http://medical-diagnostic.app/admin/processLevel/createTypeDiagnosis`,
                    { name: this.typeDiagnosisName, description: this.typeDiagnosisDescription }
                )
                    .then(response => {
                        this.typesDisplayForm = !this.typesDisplayForm;
                        this.typesOptions.push({id : response.data.id, name: this.typeDiagnosisName});
                        this.typesSelected = response.data.id;
                    })
            },
            loadDiagnosis(){
                axios.post(`http://medical-diagnostic.app/admin/processLevel/loadDiagnosis`,{id: this.typesSelected})
                    .then(response => {
                        this.diagnosisOptions = response.data;
                        this.buttonDiagnosisDisplay = true;
                    })
            },
            stateDiagnosis(){
                this.diagnosisDisplayForm = !this.diagnosisDisplayForm;
            },
            saveDiagnosis(){
                axios.post(
                    `http://medical-diagnostic.app/admin/processLevel/createDiagnosis`,
                    { type_diagnosis_id: this.typesSelected, name: this.diagnosisName, description: this.diagnosisDescription }
                )
                    .then(response => {
                        this.diagnosisDisplayForm = !this.diagnosisDisplayForm;
                        this.diagnosisOptions.push({id : response.data.id, name: this.diagnosisName});
                        this.diagnosisSelected = response.data.id;
                    })
            },
        },
        mounted() {
            axios.post(`http://medical-diagnostic.app/admin/processLevel/typeDiagnosis`)
                .then(response => {
                    this.typesOptions = response.data;
                })
        }
    }
</script>