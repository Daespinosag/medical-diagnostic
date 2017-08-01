<template>
    <div>
        <div class="col-md-12">
            <component
                    :is="activeComponent"
                    :dataStepOne="dataStepOne"
                    :level="level"
                    :criterionList="criterionList"
                    @clickButtonCancel="clickButtonCancel"
                    @clickButtonNext="clickButtonNext"
            >
                <h1 v-show="stepTwo" slot="title">step title in pattern</h1>

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

                        break;
                    default:
                        //TODO
                }
            },
            clickButtonAccept(){
                //TODO
            },
            createLevel(){
                axios.post(`http://medical-diagnostic.app/admin/processLevel/createLevel`,
                    {diagnosis_id: this.dataStepOne.diagnosisSelected}
                    )
                    .then(response => {
                        this.level = response.data;
                    })
            }
        }
    }
</script>
