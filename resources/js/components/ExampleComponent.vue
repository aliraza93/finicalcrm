<template>
    <div>
        <div v-if="first_tab_validated == 0">
            <div class="jss1">
                <div class="d-flex align-items-center multistep-style_backgroundColor__V8vnn">
                    <div class="d-flex align-items-center">
                        <div class="d-flex justify-content-center align-items-center multistep-style_backgroundColorStepCurrent__2rIT3">1</div>
                        <div class="ml-2 text-white multistep-style_stepperText__2mYeg">Basic Info</div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex justify-content-center align-items-center multistep-style_backgroundBoxStep__3yoCy">2</div>
                        <div class="ml-2 text-white multistep-style_stepperText__2mYeg">Business Details</div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex justify-content-center align-items-center multistep-style_backgroundBoxStep__3yoCy">3</div>
                        <div class="ml-2 text-white multistep-style_stepperText__2mYeg">View Quotes</div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="basicInfo-style_backgroundColor__6YzKO">
                        <div class="container-fluid pb-5 pt-3 mb-5">
                            <div class="row pb-3 pt-5 text-white basicInfo-style_headingBackground__3BH-b">
                                <div class="MuiGrid-root MuiGrid-container">
                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1 MuiGrid-grid-md-2 MuiGrid-grid-lg-3"></div>
                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-10 MuiGrid-grid-md-8 MuiGrid-grid-lg-6">
                                        <div class="basicInfo-style_headingText__1g-Es">Basic Info</div>
                                        <div class="basicInfo-style_headingTextDescription__i-PeQ">We would like to know a little about yourself. All your information is held securely and we never give your details to 3rd parties.</div>
                                    </div>
                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1 MuiGrid-grid-md-2 MuiGrid-grid-lg-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="MuiGrid-root MuiGrid-container">
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1 MuiGrid-grid-md-2 MuiGrid-grid-lg-3"></div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-10 MuiGrid-grid-md-8 MuiGrid-grid-lg-6">
                                <form>
                                    <div class="MuiGrid-root basicInfo-style_backgroundColorBox__3nFBl MuiGrid-container MuiGrid-spacing-xs-2">
                                        <div class="MuiGrid-root pt-5 pl-md-5 pl-sm-3 pl-xs-2 pr-md-5 pr-sm-3 pr-xs-2 MuiGrid-item MuiGrid-grid-xs-12">
                                            <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">

                                                <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl">
                                                    <input type="text" name="name" aria-invalid="false" v-model="name" placeholder="Enter Name" required="" class="MuiInputBase-input MuiOutlinedInput-input" />
                                                    <fieldset aria-hidden="true" class="jss4 MuiOutlinedInput-notchedOutline">
                                                        <legend class="jss6"><span>Name
                                                                <!-- --> *
                                                            </span></legend>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="MuiGrid-root pl-md-5 pl-sm-3 pl-xs-2 pr-md-5 pr-sm-3 pr-xs-2 MuiGrid-item MuiGrid-grid-xs-12">
                                            <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl">
                                                    <input type="email" name="email" aria-invalid="false" v-model="email" placeholder="Enter Email" required="" class="MuiInputBase-input MuiOutlinedInput-input" />
                                                    <fieldset aria-hidden="true" class="jss4 MuiOutlinedInput-notchedOutline">
                                                        <legend class="jss6"><span>Email
                                                                <!-- --> *
                                                            </span></legend>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="MuiGrid-root pl-md-5 pl-sm-3 pl-xs-2 pr-md-5 pr-sm-3 pr-xs-2 pb-5 MuiGrid-item MuiGrid-grid-xs-12">
                                            <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">

                                                <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl">
                                                    <input type="number" name="phone" aria-invalid="false" v-model="phone" placeholder="Enter Phone Number" required="" class="MuiInputBase-input MuiOutlinedInput-input" />
                                                    <fieldset aria-hidden="true" class="jss4 MuiOutlinedInput-notchedOutline">
                                                        <legend class="jss6"><span>Phone Number
                                                                <!-- --> *
                                                            </span></legend>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="MuiGrid-root pt-3 pb-3 pl-md-5 pl-sm-3 pl-xs-2 pr-md-5 pr-sm-3 pr-xs-2 basicInfo-style_formBtnBackground__rYMfa MuiGrid-item MuiGrid-grid-xs-12">
                                            <div class="MuiBox-root jss8">
                                                <div class="MuiBox-root jss9">
                                                    <button class="MuiButtonBase-root MuiButton-root MuiButton-contained basicInfo-style_formBtn__eyTSN MuiButton-containedPrimary MuiButton-containedSizeLarge MuiButton-sizeLarge" tabindex="0" type="button" @click="validateFirstForm()"><span class="MuiButton-label">Next<span class="MuiButton-endIcon MuiButton-iconSizeLarge"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                                    <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"></path>
                                                        </svg></span></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1 MuiGrid-grid-md-2 MuiGrid-grid-lg-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-style_footerColor__2YeVP pb-5 pt-5 ">
                <footer class="page-footer font-small text-white pt-5">
                    <div class="container-fluid"></div>
                </footer>
            </div>
            <div class="row mx-3 d-flex justify-content-center align-items-center"></div>
        </div>

        <!-- Second page -->
        <div v-if="first_tab_validated == 1 && second_tab_validated == 0">
            <div class="jss1">
                <div class="d-flex align-items-center multistep-style_backgroundColor__V8vnn">
                    <div class="d-flex align-items-center">
                        <div class="d-flex justify-content-center align-items-center multistep-style_backgroundColorStepDone__1XuRZ"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
                            </svg></div>
                        <div class="ml-2 text-white">Basic Info</div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex justify-content-center align-items-center multistep-style_backgroundColorStepCurrent__2rIT3">2</div>
                        <div class="ml-2 text-white">Business Details</div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex justify-content-center align-items-center multistep-style_backgroundBoxStep__3yoCy">3</div>
                        <div class="ml-2 text-white">View Quotes</div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="business-style_backgroundColor__3MrBt">
                        <div class="container-fluid pb-5 pt-3 mb-5">
                            <div class="row pb-3 pt-3 text-white business-style_headingBackground__20p_O">
                                <div class="MuiGrid-root MuiGrid-container">
                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1 MuiGrid-grid-md-2 MuiGrid-grid-lg-3"></div>
                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-10 MuiGrid-grid-md-8 MuiGrid-grid-lg-6">
                                        <div class="business-style_headingText__2Xwvy">Business Details</div>
                                        <div class="business-style_headingTextDescription__KWmIN">We would like to know a little about your business and how your transactions flow looks like. All your information is held securely and we never give your details to 3rd parties.</div>
                                    </div>
                                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1 MuiGrid-grid-md-2 MuiGrid-grid-lg-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="MuiGrid-root MuiGrid-container">
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1 MuiGrid-grid-md-2 MuiGrid-grid-lg-3"></div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-10 MuiGrid-grid-md-8 MuiGrid-grid-lg-6">
                                <form>
                                    <div class="MuiGrid-root business-style_backgroundColorBox__3TC-Q MuiGrid-container MuiGrid-spacing-xs-2">
                                        <div class="MuiGrid-root pt-5 pl-md-5 pl-sm-3 pl-xs-2 pr-md-5 pr-sm-3 pr-xs-2 MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-12">
                                            <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl">
                                                    <input aria-invalid="false" name="business_name" v-model="business_name" placeholder="Enter Business Name" required="" type="text" class="MuiInputBase-input MuiOutlinedInput-input" value="">
                                                    <fieldset aria-hidden="true" class="jss4 MuiOutlinedInput-notchedOutline">
                                                        <legend class="jss6"><span>Business Name&nbsp;*</span></legend>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="MuiGrid-root pl-md-5 pl-sm-3 pl-xs-2 pr-md-5 pr-sm-3 pr-xs-2 MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-12">
                                            <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl">
                                                    <input aria-invalid="false" name="industry" v-model="industry" placeholder="Enter Industry Name" required="" type="text" class="MuiInputBase-input MuiOutlinedInput-input" value="">
                                                    <fieldset aria-hidden="true" class="jss4 MuiOutlinedInput-notchedOutline">
                                                        <legend class="jss6"><span>Industry&nbsp;*</span></legend>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="MuiGrid-root pl-md-5 pl-sm-3 pl-xs-2 pr-md-5 pr-sm-3 pr-xs-2 MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-12">
                                            <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl">
                                                    <input aria-invalid="false" name="state" v-model="state" placeholder="Enter State" required="" type="text" class="MuiInputBase-input MuiOutlinedInput-input" value="">
                                                    <fieldset aria-hidden="true" class="jss4 MuiOutlinedInput-notchedOutline">
                                                        <legend class="jss6"><span>State&nbsp;*</span></legend>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="MuiGrid-root pl-md-5 pl-sm-3 pl-xs-2 pr-md-5 pr-sm-3 pr-xs-2 MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-12">
                                            <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl">
                                                    <input aria-invalid="false" v-model="average_ticket_sale" name="avg_sale_ticket" placeholder="Enter Average Ticket Sale ($)" required="" type="number" class="MuiInputBase-input MuiOutlinedInput-input" value="">
                                                    <fieldset aria-hidden="true" class="jss4 MuiOutlinedInput-notchedOutline">
                                                        <legend class="jss6"><span>Average Ticket Sale ($)&nbsp;*</span></legend>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="MuiGrid-root pl-md-5 pl-sm-3 pl-xs-2 pr-md-5 pr-sm-3 pr-xs-2 MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-12">
                                            <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl">
                                                    <input aria-invalid="false" name="monthly_vol" v-model="monthly_volume" placeholder="Enter Last Month's Volume ($)" required="" type="number" class="MuiInputBase-input MuiOutlinedInput-input" value="">
                                                    <fieldset aria-hidden="true" class="jss4 MuiOutlinedInput-notchedOutline">
                                                        <legend class="jss6"><span>How much was your total processing volume on last month’s statement ($)&nbsp;*</span></legend>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="MuiGrid-root pl-md-5 pl-sm-3 pl-xs-2 pr-md-5 pr-sm-3 pr-xs-2 MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-12">
                                            <div class="MuiFormControl-root MuiTextField-root MuiFormControl-fullWidth">
                                                <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-fullWidth MuiInputBase-formControl">
                                                    <input aria-invalid="false" name="paying_now" v-model="paying_now" placeholder="Enter How Much Fees You Are Paying ($)" required="" type="number" class="MuiInputBase-input MuiOutlinedInput-input" value="">
                                                    <fieldset aria-hidden="true" class="jss4 MuiOutlinedInput-notchedOutline">
                                                        <legend class="jss6"><span>How much were you charged in total fees on last month’s statement ($)&nbsp;*</span></legend>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="MuiGrid-root pl-md-5 pl-sm-3 pl-xs-2 pr-md-5 pr-sm-3 pr-xs-2 MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-12">
                                            <fieldset class="MuiFormControl-root">
                                                <legend class="MuiFormLabel-root">Do you accept cards in Person?</legend>
                                                <div class="MuiFormGroup-root" role="radiogroup" aria-label="gender">
                                                    <div class="MuiBox-root jss18">
                                                        <label class="MuiFormControlLabel-root">
                                                            <span class="MuiButtonBase-root MuiIconButton-root jss11 MuiRadio-root MuiRadio-colorPrimary jss12 Mui-checked MuiIconButton-colorPrimary" aria-disabled="false">
                                                                <span class="MuiIconButton-label">
                                                                    <input class="jss14" v-model="accept_card_in_person" type="radio" value="Yes">
                                                                </span>
                                                                <span class="MuiTouchRipple-root"></span>
                                                                </span>
                                                                <span class="MuiTypography-root MuiFormControlLabel-label MuiTypography-body1">Yes</span>
                                                        </label>
                                                        <label class="MuiFormControlLabel-root">
                                                            <span class="MuiButtonBase-root MuiIconButton-root jss11 MuiRadio-root MuiRadio-colorPrimary MuiIconButton-colorPrimary" aria-disabled="false">
                                                                <span class="MuiIconButton-label">
                                                                    <input class="jss14" v-model="accept_card_in_person" type="radio" value="No">
                                                                </span>
                                                                <span class="MuiTouchRipple-root"></span>
                                                            </span>
                                                            <span class="MuiTypography-root MuiFormControlLabel-label MuiTypography-body1">No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="MuiGrid-root pl-md-5 pl-sm-3 pl-xs-2 pr-md-5 pr-sm-3 pr-xs-2 MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-12">
                                            <fieldset class="MuiFormControl-root">
                                                <legend class="MuiFormLabel-root">Do you accept cards online?</legend>
                                                <div class="MuiFormGroup-root" role="radiogroup" aria-label="gender">
                                                    <div class="MuiBox-root jss18">
                                                        <label class="MuiFormControlLabel-root">
                                                            <span class="MuiButtonBase-root MuiIconButton-root jss11 MuiRadio-root MuiRadio-colorPrimary jss12 Mui-checked MuiIconButton-colorPrimary" aria-disabled="false">
                                                                <span class="MuiIconButton-label">
                                                                    <input class="jss14" v-model="accept_card_online" type="radio" value="Yes">
                                                                </span>
                                                                <span class="MuiTouchRipple-root"></span>
                                                                </span>
                                                                <span class="MuiTypography-root MuiFormControlLabel-label MuiTypography-body1">Yes</span>
                                                        </label>
                                                        <label class="MuiFormControlLabel-root">
                                                            <span class="MuiButtonBase-root MuiIconButton-root jss11 MuiRadio-root MuiRadio-colorPrimary MuiIconButton-colorPrimary" aria-disabled="false">
                                                                <span class="MuiIconButton-label">
                                                                    <input class="jss14" v-model="accept_card_online" type="radio" value="No">
                                                                </span>
                                                                <span class="MuiTouchRipple-root"></span>
                                                            </span>
                                                            <span class="MuiTypography-root MuiFormControlLabel-label MuiTypography-body1">No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="MuiGrid-root pb-0 pl-0 pr-0 MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-sm-12">
                                            <div class="MuiBox-root jss19 pt-3 pb-3 business-style_formBtnBackground__5uEMa d-flex justify-content-between">
                                                <div class="MuiBox-root jss20"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained ml-4 business-style_formBtn__1hNCl MuiButton-containedPrimary MuiButton-containedSizeLarge MuiButton-sizeLarge" tabindex="0" type=""><span class="MuiButton-label"><span class="MuiButton-startIcon MuiButton-iconSizeLarge"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                                    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
                                                                </svg></span>Previous</span><span class="MuiTouchRipple-root"></span></button></div>
                                                <div class="MuiBox-root jss21"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained mr-4 business-style_formBtn__1hNCl MuiButton-containedPrimary MuiButton-containedSizeLarge MuiButton-sizeLarge" tabindex="0" :disabled="disableSubmitButton" type="button" @click="validateSecondTab()" value="Get Free Quotes Now"><span class="MuiButton-label">{{status ? "Submitting..." : "Get Free Quotes Now"}}<span class="MuiButton-endIcon MuiButton-iconSizeLarge"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                                    <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"></path>
                                                                </svg></span></span><span class="MuiTouchRipple-root"></span></button></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-1 MuiGrid-grid-md-2 MuiGrid-grid-lg-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-style_footerColor__2YeVP pb-5 pt-5 ">
                <footer class="page-footer font-small text-white pt-5">
                    <div class="container-fluid"></div>
                </footer>
            </div>
            <div class="row mx-3 d-flex justify-content-center align-items-center"></div>
        </div> 

        <!-- Third Page -->
        <div v-if="second_tab_validated == 1" id="__next">
            <div class="jss1">
                <div class="d-flex align-items-center multistep-style_backgroundColor__V8vnn">
                    <div class="d-flex align-items-center">
                        <div class="d-flex justify-content-center align-items-center multistep-style_backgroundColorStepDone__1XuRZ"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
                            </svg></div>
                        <div class="ml-2 text-white">Basic Info</div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex justify-content-center align-items-center multistep-style_backgroundColorStepDone__1XuRZ"><svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
                            </svg></div>
                        <div class="ml-2 text-white">Business Details</div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex justify-content-center align-items-center multistep-style_backgroundColorStepCurrent__2rIT3">3</div>
                        <div class="ml-2 text-white">View Quotes</div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="container-fluid pb-5 mb-5 quotation-style_backgroundColor__2dp4v">
                        <div class="row pb-5 pt-2 text-white quotation-style_headingBackground__32hlI">
                            <div class="col-md-2 col-lg-3"></div>
                            <div class="col-md-8 col-lg-6 mt-3 mx-2 mx-md-0">
                                <div class="row d-flex  align-items-center">
                                    <div class="quotation-style_headingTextTop__2VcAX">View Quotes</div>
                                </div>
                                <div class="row d-flex align-items-center">
                                    <div class="quotation-style_headingTextDescription__3tGiU">Based on your information, we were able to find some processors willing to offer you affordable processing rates.</div>
                                </div>
                                <div class="quotation-style_headingTextRateTop__1EoIJ">
                                    <div class="mx-4 my-4 text-center">Your Current Effective Rate Is = {{ effective_rate }}</div>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-3"></div>
                        </div>
                        <div class="row mx-5 mt-5 pt-2 mb-3 d-flex justify-content-center">
                            <div class="col quotation-style_startText__3nlHR">We've found {{ companies.length }} quote(s) for you</div>
                        </div>
                        <div class="px-sm-1 px-md-5">
                            <div class="row">
                                <div class="col-md-3 d-md-none quotation-style_backgroundColorInfoColumn__1Jpay">
                                    <div class="row mt-1 pt-2">
                                        <div class="col d-flex flex-column align-items-start quotation-style_headingText__eAwP2">
                                            <div>Basic Info You Entered</div>
                                        </div>
                                    </div>
                                    <div class="row mt-2 text-white quotation-style_infoText__2tSbi">
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Name</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>{{ name }}</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Email</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start quotation-style_email__26iv9">
                                            <div>{{ email }}</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Phone Number</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>{{ phone }}</div>
                                        </div>
                                    </div>
                                    <div class="row mt-2 ">
                                        <div class="col d-flex flex-column align-items-start quotation-style_headingText__eAwP2">
                                            <div>COST ESTIMATES FOR</div>
                                        </div>
                                    </div>
                                    <div class="row mt-2 text-white quotation-style_infoText__2tSbi">
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Business Name</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>{{ business_name }}</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Industry</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>{{ industry }}</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>State</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>{{ state }}</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Average Ticket Per Sale ($)</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>{{ average_ticket_sale }}</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Total processing volume on last month’s statement ($)</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>{{ monthly_volume }}</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Total fees charged on last month’s statement ($)</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>{{ paying_now }}</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Accept cards in person?</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>{{ accept_card_in_person }}</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Accept cards online?</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>{{ accept_card_online }}</div>
                                        </div>
                                    </div>
                                    <div class="row mx-1 mt-3">
                                        <div class="col quotation-style_horizontalLineInfo__28lAy"></div>
                                    </div>
                                    <div class="row mx-1 mt-2 quotation-style_headingTextRate__kJeQS ">Current Effective Rate: {{ effective_rate }}</div>
                                    <div class="row mx-1 mt-2 pb-2 quotation-style_descriptionTextInfo__3h3rT">The only rate that matters is your effective rate</div>
                                </div>
                                <div class="col-lg-9 quotation-style_leftSide__y8gKx">
                                    <div class="row" style="margin-bottom: 10px;" v-for="(value,index) in company_data" v-bind:key="index">
                                        <div class="col-lg-9 mt-1 pr-md-0">
                                            <div class="MuiBox-root jss22 quotation-style_backgroundColorBox__3-XjR">
                                                <div class="row mx-2">
                                                    <div class="col-md-4 mt-2">
                                                        <!-- <img src="https://images-cp-stag.s3.amazonaws.com/companylogos/0859ab6f-634e-4b4e-bfa8-e83f9f2fcde6.png?AWSAccessKeyId=ASIAYS6ZNAFU3NZGWSTW&amp;Expires=1616742116&amp;Signature=Bzkqw58brlen18Z%2BWFZzw9p0FU0%3D&amp;x-amz-security-token=IQoJb3JpZ2luX2VjEK%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwEaCXVzLWVhc3QtMSJHMEUCIQDBC36caFL%2Bg1ZimEra%2BPnjkgwo1pcA3dzc%2BrERcfuLEAIgFb3PXe1ux1wCmjRjy%2FlRuNQidJRGmixwwhD7xL0KCk4q8gEI6P%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FARAAGgw1OTA0NzcwNjY2MDEiDBx4aXUWaEWKU2GQeSrGAdxk%2FQ4NWPGyMXIMrbHI%2F2UDD9cFqyR6Ckl0PZ6pqm%2FZggSduLTAHt1EfJ4uEa6hZRqRQ%2FY0ufGxoy%2Bwxor7N3hD4SAXxoPBNOdP1SqiqowbLHTG3mX37D8P1aZB1dJDQ9BybZi16mJYxxrbN2d5lV%2BpFroSFQAye6AzCASxkJhAvPrPguYs%2FEIqZOnRWHhd4%2B8poMwS9Xkv4S7HpNyeALSJKWxI57IJUMJ58emsQ0YbkzGx3fxi6SRbjNi4RxRvnhvcfrxUbTDh6vCCBjrgAWqYFTxXXeo2TlCSAScy6Uqu%2F174Ky9Jmhf4MyNfD3E7yLqtoiZkK%2BPmbJZW9Mh6xG1rSvyt%2F7ctjplPR6xlmLmM5F%2F7mNq1kV9XIyTNsNlAbtq%2BIC8jPdX1qgePEpm6RmlDQqVLwvR4fYNELh7%2BV5IpZfIOjV7RNFToSUAcMV%2FMp3ZflFuxe3fPWjKyMtIshPdmPttMKaPy1vEMwpeiHKM2CVs7hNKKrS7iQetDFuHCPSnfwpxqObZL7H%2FKBWdbI91UEhaDf3Y1uXkzCoH2kJTDnwR7tuSAoOQo64Wfwtd5" height="60vh" width="60vh"> -->
                                                        {{ value.name }}
                                                    </div>
                                                    <div class="col-md-8 quotation-style_topText__HbMpZ">
                                                        <div class="row d-flex align-items-center">
                                                            <div class="col-9 d-flex flex-column align-items-md-end">
                                                                <div>Effective Rate:</div>
                                                            </div>
                                                            <div class="col-3 d-flex flex-column align-items-start quotation-style_topNumber__3cQtH">
                                                                <div class="quotation-style_rate__1LT17">{{ value.effective_rate }}</div>
                                                            </div>
                                                        </div>
                                                        <div class="row d-flex align-items-center">
                                                            <div class="col-9 d-flex flex-column align-items-end">
                                                                <div>Estimated Monthly Processing Fee:</div>
                                                            </div>
                                                            <div class="col-3 d-flex flex-column align-items-start quotation-style_topNumber__3cQtH">
                                                                <div class="quotation-style_rate__1LT17">${{ value.monthly_volume }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mx-2 my-3 mt-4 d-flex justify-content-center">
                                                    <div class="col text-center quotation-style_descriptionText__2glQs">Your final pricing may defer based on additonal information asked by the payment processor</div>
                                                </div>
                                                <div class="row m-3 quotation-style_servicesText__2dXj3">
                                                    <div class="col d-flex flex-row justify-content-center">
                                                        <div v-for="(data, i) in value.list" v-bind:key="i" class="d-flex flex-row w-100 justify-content-between flex-wrap">
                                                            <div class="d-flex flex-row align-items-center quotation-style_service__39ntF"><svg class="MuiSvgIcon-root quotation-style_checkIcon__2cRDc" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                                                                </svg>{{ data }}
                                                            </div>
                                                            <!-- <div class="d-flex flex-row align-items-center quotation-style_service__39ntF"><svg class="MuiSvgIcon-root quotation-style_checkIcon__2cRDc" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                                                                </svg>Free Equipment</div>
                                                            <div class="d-flex flex-row align-items-center quotation-style_service__39ntF"><svg class="MuiSvgIcon-root quotation-style_checkIcon__2cRDc" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                                                                </svg>No Hidden Fee</div>
                                                            <div class="d-flex flex-row align-items-center quotation-style_service__39ntF"><svg class="MuiSvgIcon-root quotation-style_checkIcon__2cRDc" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                                                                </svg>No Setup Cost</div>
                                                            <div class="d-flex flex-row align-items-center quotation-style_service__39ntF"><svg class="MuiSvgIcon-root quotation-style_checkIcon__2cRDc" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                                                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                                                                </svg>24x7 Customer Service</div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mx-3 my-md-4 ">
                                                    <div class="col quotation-style_horizontalLine__32voc"></div>
                                                </div>
                                                <div class="row m-2 quotation-style_savingsText__2C9xU">
                                                    <div class="col-3 col-sm-3 col-md-2 text-center p-0">
                                                        <div>Your Monthly <br> Savings</div>
                                                        <div class="mt-md-1 quotation-style_savingsNumber__35Pzq">${{ value.monthly_savings }}</div>
                                                    </div>
                                                    <div class="col-3 col-sm-3 col-md-2 text-center p-0">
                                                        <div>1 Year <br> Savings</div>
                                                        <div class="mt-md-1 quotation-style_savingsNumber__35Pzq">${{ value.yearly_saving }}</div>
                                                    </div>
                                                    <div class="col-3 col-sm-3 col-md-2 text-center p-0">
                                                        <div>2 Year <br> Savings</div>
                                                        <div class="mt-md-1 quotation-style_savingsNumber__35Pzq">${{ value.year2saving }}</div>
                                                    </div>
                                                    <div class="col-3 col-sm-3 col-md-2 text-center p-0">
                                                        <div>3 Year <br> Savings</div>
                                                        <div class="mt-md-1 quotation-style_savingsNumber__35Pzq">${{ value.year3saving }}</div>
                                                    </div>
                                                    <div class="mt-3 mt-md-0 col-md-4 text-center">
                                                        <div class="mb-2">I'm Interested</div>
                                                        <div>
                                                            <div class="MuiBox-root jss23"><button style="margin-bottom: 8px;" class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-containedSizeLarge MuiButton-sizeLarge" tabindex="0" type=""><span class="MuiButton-label">Choose This Quote</span><span class="MuiTouchRipple-root"></span></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 pl-md-4 pr-md-4 quotation-style_discountBlock__16YqN">
                                            <div class="row quotation-style_orText__2Z2ez mt-md-3">
                                                <div class="col d-flex flex-column align-items-center">
                                                    <div>OR</div>
                                                </div>
                                            </div>
                                            <div class="row quotation-style_descriptionTextOR__1jntE">
                                                <div class="col d-flex flex-column align-items-center text-center">
                                                    <div>Would you like to eliminate up to 100% of your credit card processing fee using processors cash discount program?</div>
                                                </div>
                                            </div>
                                            <div class="row my-1">
                                                <div class="col d-flex quotation-style_discountActions__YIevf ">
                                                    <div>
                                                        <div class="MuiBox-root jss24"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary" tabindex="0" type=""><span class="MuiButton-label">Yes</span><span class="MuiTouchRipple-root"></span></button></div>
                                                    </div>
                                                    <div>
                                                        <div class="MuiBox-root jss25"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary" tabindex="0" type=""><span class="MuiButton-label">No</span><span class="MuiTouchRipple-root"></span></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-1 quotation-style_textCDC__2NWc4">
                                                <div class="col d-flex flex-column align-items-center text-center ">
                                                    <div>Cash Discount <br> Program</div>
                                                </div>
                                            </div>
                                            <div class="row mt-1 quotation-style_textLearn__2U2Ne">
                                                <div class="col d-flex flex-column align-items-center text-center ">
                                                    <div>Learn More</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ml-1 mt-3 mt-md-4 mb-2 mb-md-4">
                                        <div class="col quotation-style_horizontalLine__32voc"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-none d-md-block quotation-style_backgroundColorInfoColumn__1Jpay quotation-style_rightSide__3p1XA">
                                    <div class="row mt-1 pt-2">
                                        <div class="col d-flex flex-column align-items-start quotation-style_headingText__eAwP2">
                                            <div>Basic Info You Entered</div>
                                        </div>
                                    </div>
                                    <div class="row mt-2 text-white quotation-style_infoText__2tSbi">
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Name</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <span>{{ name }}</span>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Email</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start quotation-style_email__26iv9">
                                            <span>{{ email }}</span>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Phone Number</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <span>{{ phone }}</span>
                                        </div>
                                    </div>
                                    <div class="row mt-2 ">
                                        <div class="col d-flex flex-column align-items-start quotation-style_headingText__eAwP2">
                                            <div>COST ESTIMATES FOR</div>
                                        </div>
                                    </div>
                                    <div class="row mt-2 text-white quotation-style_infoText__2tSbi">
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Business Name</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <span>{{ business_name }}</span>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Industry</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <span>{{ industry }}</span>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>State</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <span>{{ state }}</span>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Average Ticket Per Sale ($)</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <span>{{ average_ticket_sale }}</span>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Total processing volume on last month’s statement ($)</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <span>{{ monthly_volume }}</span>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Total fees charged on last month’s statement ($)</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <span>{{ paying_now }}</span>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Accept cards in person?</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>{{ accept_card_in_person }}</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>Accept cards online?</div>
                                        </div>
                                        <div class="col-6 mt-2 d-flex flex-column align-items-start">
                                            <div>{{ accept_card_online }}</div>
                                        </div>
                                    </div>
                                    <div class="row mx-1 mt-3">
                                        <div class="col quotation-style_horizontalLineInfo__28lAy"></div>
                                    </div>
                                    <div class="row mx-1 mt-2 quotation-style_headingTextRate__kJeQS ">Current Effective Rate: 100.00</div>
                                    <div class="row mx-1 mt-2 pb-2 quotation-style_descriptionTextInfo__3h3rT">The only rate that matters is your effective rate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-style_footerColor__2YeVP pb-5 pt-5 ">
                <footer class="page-footer font-small text-white pt-5">
                    <div class="container-fluid"></div>
                </footer>
            </div>
            <div class="row mx-3 d-flex justify-content-center align-items-center"></div>
        </div> 
    </div>
</template>
<script>

export default {
    data() {
    return {
        name: '',
        email: '',
        phone: '',
        business_name: '',
        industry: '',
        state: '',
        average_ticket_sale: '',
        monthly_volume: '',
        paying_now: '',
        effective_rate: '',
        accept_card_in_person: '',
        accept_card_online: '',
        first_tab_validated: 0,
        second_tab_validated: 0,
        status: false,
        companies: [],
        company_data: [],
        notificationSystem: {
          options: {
              success: {
                  position: "topRight",
                  timeout: 3000,
                  class: 'success_notification'
              },
              error: {
                  position: "topRight",
                  timeout: 4000,
                  class: 'error_notification'
              },
              completed: {
                  position: 'center',
                  timeout: 1000,
                  class: 'complete_notification'
              },
              info: {
                  overlay: true,
                  zindex: 999,
                  position: 'center',
                  timeout: 3000,
                  class: 'info_notification',
              }
          }
      },
    };
  },
  created() {
      axios.get(base_url+'companies')
        .then(response => {
            this.companies = response.data
        })
  },
  
  computed: {
    disableSubmitButton() {
        return this.status ? true: false
    },
  },

  methods: {
    validateFirstForm() {
      if(this.name == '' || this.email == '' || this.phone == '') {
          this.$toast.error('Please fill in all the fields', "Error Alert", this.notificationSystem.options.error);
          this.first_tab_validated = 0;
      }
      else {
          this.first_tab_validated = 1;
          return true
      }
    },
    formValidation() {
            var modernWizard = document.querySelector('.modern-wizard-example');
                if (typeof modernWizard !== undefined && modernWizard !== null) {
                    var modernStepper = new Stepper(modernWizard, {
                    linear: false
                    });
                    $(modernWizard)
                    .find('.btn-next')
                    .on('click', function () {
                        modernStepper.next();
                    });
                    $(modernWizard)
                    .find('.btn-prev')
                    .on('click', function () {
                        modernStepper.previous();
                    });

                    $(modernWizard)
                    .find('.btn-submit')
                    .on('click', function () {
                        alert('Submitted..!!');
                    });
                }
        },
    validateSecondTab() {
        if(this.business_name == '' || this.industry == '' || this.state == '' || this.average_ticket_sale == '' || this.monthly_volume == '' || this.paying_now == '' || this.accept_card_in_person == '' || this.accept_card_online == '') {
            this.$toast.error('Please fill in all the fields', "Error Alert", this.notificationSystem.options.error);
            this.second_tab_validated = 0;
        }
        else {
            this.status = true;
            let value = this.paying_now / this.monthly_volume * 100;
            this.effective_rate = Number.parseFloat(value).toPrecision(3);
            // this.effective_rate = value
            for(let i = 0; i < this.companies.length; i++) {
                let effective_rate  = value >= 1.75 ? value - this.companies[i].cut_percentage : 'No Quotes For You';
                let monthly_volume  = value >= 1.75 ? 65000 * (effective_rate/100) : 'No Quotes For You';
                let monthly_savings = value >= 1.75 ? 1139 - monthly_volume : 'No Quotes For You';
                let yearly_saving   = value >= 1.75 ? monthly_savings * 12 : 'No Quotes For You';
                let year2saving     = value >= 1.75 ? monthly_savings * 24 : 'No Quotes For You';
                let year3saving     = value >= 1.75 ? monthly_savings * 36 : 'No Quotes For You';
                // console.log(value,  effective_rate, monthly_volume, monthly_savings, yearly_saving, year2saving)
                let array = {}
                array['id']     = this.companies[i].id
                array['name']    = this.companies[i].name
                array['effective_rate'] = Number.parseFloat(effective_rate).toPrecision(3)
                array['monthly_volume'] = monthly_volume.toFixed(2)
                array['monthly_savings']= monthly_savings.toFixed(2)
                array['yearly_saving']  = yearly_saving.toFixed(2)
                array['year2saving']    = year2saving.toFixed(2)
                array['year3saving']    = year3saving.toFixed(2)
                array['list']           = this.companies[i].list
                this.company_data.push(array)
            }
            this.second_tab_validated = 1;
            this.status = false;
            return true
        }
    },
  },
}
</script>