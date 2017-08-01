<template>
    <div>
        <div class="col-lg-12">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-head card-head-xs style-primary">
                        <label class="control-label col-md-4">Type Diagnosis</label>
                    </div>
                    <div class="card-body" v-if="!typesDisplayForm">
                        <div class="form-group col-md-10">
                            <label class="control-label col-md-4">Type Diagnosis</label>
                            <select class="form-control col-md-8" v-model="localTypesSelected" v-on:change="loadDiagnosis">
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
                    <span> Selected: {{ localTypesSelected }}</span>
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
                            <select class="form-control col-md-8" v-model="localDiagnosisSelected" v-on:change="changeDiagnosis">
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

                    <span> Selected: {{ localDiagnosisSelected }}</span>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card-actionbar-row">
                <button class="btn btn-raised btn-default btn-inline ink-reaction pull-left"
                        @click="clickButtonCancel"
                >Cancel</button>
                <button class="btn btn-raised btn-primary btn-inline ink-reaction"
                        @click="clickButtonNext"
                >Next</button>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return{
                typesDisplayForm: false,
                diagnosisDisplayForm: false,
                buttonDiagnosisDisplay: false,
                typeDiagnosisName: '',
                diagnosisName: '',
                typeDiagnosisDescription: '',
                diagnosisDescription: '',
                typesOptions: [],
                diagnosisOptions: [],
                localTypesSelected: null,
                localDiagnosisSelected: null,
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
                        this.localTypesSelected = response.data.id;
                        this.localDiagnosisSelected = null;
                        this.diagnosisOptions = [];
                        this.buttonDiagnosisDisplay = true;
                    })
            },
            loadDiagnosis(){
                this.localDiagnosisSelected = null;
                axios.post(`http://medical-diagnostic.app/admin/processLevel/loadDiagnosis`,{id: this.localTypesSelected})
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
                    { type_diagnosis_id: this.localTypesSelected, name: this.diagnosisName, description: this.diagnosisDescription }
                )
                    .then(response => {
                        this.diagnosisDisplayForm = !this.diagnosisDisplayForm;
                        this.diagnosisOptions.push({id : response.data.id, name: this.diagnosisName});
                        this.localDiagnosisSelected = response.data.id;
                    })
            },
            changeDiagnosis(){
                //TODO
            },
            clickButtonCancel(){
                //TODO
                console.log('click in cancel button')
            },
            clickButtonNext(){
                if (this.localTypesSelected){
                    if (this.localDiagnosisSelected){
                        var value =  {
                            diagnosisSelected: this.localDiagnosisSelected,
                            diagnosisName: this.diagnosisName,
                            typesSelected: this.localTypesSelected,
                            typeDiagnosisName: this.typeDiagnosisName
                        };

                        this.$emit('clickButtonNext',value);
                    }else {
                        //TODO
                        console.log('Error debes selecceionar un diagnostico');
                    }
                }else {
                    //TODO
                    console.log('Error Debes seleccionar un typo de diadnostico');
                }
            }
        },
        mounted() {
            axios.post(`http://medical-diagnostic.app/admin/processLevel/typeDiagnosis`)
                .then(response => {
                    this.typesOptions = response.data;
                })
        }
    }
</script>