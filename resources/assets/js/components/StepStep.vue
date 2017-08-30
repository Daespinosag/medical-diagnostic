<template>
    <div>
        <div>
            <div class="col-lg-4 ">
                <div class="col-log-10 col-lg-offset-1 text-center"  v-bind:class="{'style-primary' : stepOne,'style-default': !stepOne}" >
                    <p>Paso Uno: <strong>Elección Diagnóstico</strong></p>
                </div>
            </div>
            <div class="col-lg-4  text-center" >
                <div class="col-log-10 col-lg-offset-1 text-center"  v-bind:class="{'style-primary' : stepTwo, 'style-default': !stepTwo}" >
                    <p>Paso Dos: <strong>Elección de Criterios</strong></p>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="col-log-10 col-lg-offset-1 text-center"   v-bind:class="{'style-primary' : stepTree,'style-default': !stepTree}" >
                    <p>Paso Tres: <strong>Crear Fórmula</strong></p>
                </div>
            </div>
        </div>

        <br><br><br>
        <div class="col-md-12">
            <component
                    :is="activeComponent"
                    :dataStepOne="dataStepOne"
                    :level="level"
                    :criterionList="criterionList"
                    :redirectLevel="redirectLevel"
                    @clickButtonCancel="clickButtonCancel"
                    @clickButtonNext="clickButtonNext"
            >

            </component>

        </div>

        <div>

    </div>

    </div>

</template>

<script>
    //import {store} from "../store/store";
    Vue.component('step-one',require('../components/StepOne.vue'));
    Vue.component('step-two',require('../components/StepTwo.vue'));
    Vue.component('step-three',require('../components/StepThree.vue'));

    export default {
        //store,
        data() {
            return{
                activeComponent: 'step-one',
                stepOne: true,
                stepTwo: false,
                stepTree: false,
                step: 1,
                level: null,
                dataStepOne: [],
                criterionList:[],
                redirectLevel : '/medical-diagnostic/admin/level'
            }
        },
        methods: {
            clickButtonCancel(){
                switch (this.step) {
                    case 1:
                        //TODO
                        break;
                    case 2:

                        this.activeComponent = 'step-one';
                        this.step = 1;
                        this.stepOne = true;
                        this.stepTwo = false;

                        break;
                    case 3:

                        this.activeComponent = 'step-two';
                        this.step = 2;
                        this.stepTwo = true;
                        this.stepTree = false;

                        break;
                    default:
                        //TODO
                }
            },
            clickButtonNext(value){
                switch (this.step) {
                    case 1:
                        this.dataStepOne = value;
                        this.createLevel();
                        this.activeComponent = 'step-two';
                        this.step = 2;
                        this.stepOne = false;
                        this.stepTwo = true;
                        break;
                    case 2:
                        this.criterionList = value;
                        this.activeComponent = 'step-three';
                        this.step = 3;
                        this.stepTwo = false;
                        this.stepTree = true;
                    case 3:

                        break;
                    default:
                        //TODO
                }
            },
            clickButtonAccept(){
                //TODO
            },
            createLevel(){
                axios.post(`/admin/processLevel/createLevel`,
                    {diagnosis_id: this.dataStepOne.diagnosisSelected}
                    )
                    .then(response => {
                        this.level = response.data;
                    })
            }
        }
    }
</script>
