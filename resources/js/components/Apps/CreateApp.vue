<template>
    <div class="bs-stepper wizard-modern modern-wizard-example">
        <div class="bs-stepper-header">
            <div class="row">
                <div class="step col-md-2 mr-2" data-target="#business_information">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">
                            <i data-feather="file-text" class="font-medium-3"></i>
                        </span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Business Information</span>
                            <span class="bs-stepper-subtitle">Business Account Details</span>
                        </span>
                    </button>
                </div>
                
                <div class="step col-md-2 mr-1" data-target="#address_detail">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">
                            <i data-feather="user" class="font-medium-3"></i>
                        </span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Address Detail</span>
                            <span class="bs-stepper-subtitle">Add Address Detail</span>
                        </span>
                    </button>
                </div>
                
                <div class="step col-md-2 mr-2" data-target="#fees_and_charges">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">
                            <i data-feather="map-pin" class="font-medium-3"></i>
                        </span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Charges and Fees</span>
                            <span class="bs-stepper-subtitle">Charges and Fees</span>
                        </span>
                    </button>
                </div>
                
                <div class="step col-md-2 mr-2" data-target="#owner_detail">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">
                            <i data-feather="link" class="font-medium-3"></i>
                        </span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Owner's Detail</span>
                            <span class="bs-stepper-subtitle">Owner's Detail</span>
                        </span>
                    </button>
                </div>
                
                <div class="step col-md-2 mr-2" data-target="#transaction_detail">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">
                            <i data-feather="link" class="font-medium-3"></i>
                        </span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Transaction Detail</span>
                            <span class="bs-stepper-subtitle">Transaction Detail</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="bs-stepper-content">
            <div id="business_information" class="content">
                <div class="content-header">
                    <h5 class="mb-0">Business Information</h5>
                    <small class="text-muted">Enter Your Business Information.</small>
                </div>
                <div class="alert alert-danger" v-if="errors">
                    <ul>
                        <li v-for="error in errors" :key="error">{{ error[0] }}</li>
                    </ul>
                </div>
                <form>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-username">What is your business name?</label>
                            <input v-model="business_information.businessName" type="text" id="modern-business-name" class="form-control" placeholder="Business Name" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-phone-number">Business Phone number</label>
                            <input type="text" v-model="business_information.business_phone" id="modern-email" class="form-control" placeholder="Business Phone Number" aria-label="john.doe" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group form-password-toggle col-md-6">
                            <label class="form-label" for="modern-password">Email</label>
                            <input type="email" v-model="business_information.business_email" id="modern-password" class="form-control" placeholder="abc@example.com" />
                        </div>
                        <div class="form-group form-password-toggle col-md-6">
                            <label class="form-label" for="modern-confirm-password">Confirm Email</label>
                            <input type="email" v-model="business_information.business_email_confirmation" id="modern-confirm-password" class="form-control" placeholder="abc@example.com" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group form-password-toggle col-md-6">
                            <label class="form-label" for="modern-password">Agent Office/Sales Rep Name</label>
                            <input type="text" id="modern-password" v-model="business_information.agent_office_rep_name" class="form-control" placeholder="Agent Office/Sales Rep Name" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-outline-secondary btn-prev" disabled>
                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button @click="validateFirstTab()" :disabled="disableFirstFormButton" value="Next" class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">{{savingFirstForm ? "Submitting..." : "Next"}}</span>
                            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div id="address_detail" class="content">
                <div class="content-header">
                    <h5 class="mb-0">Address Detail</h5>
                    <small>Enter Your Address Detail.</small>
                </div>
                <div class="alert alert-danger" v-if="errors">
                    <ul>
                        <li v-for="error in errors2" :key="error">{{ error[0] }}</li>
                    </ul>
                </div>
                <form>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label" for="modern-country">What type of business is it?</label>
                            <select v-model="address_details.business_type" class="form-control" id="select-country" >
                                    <option value="">Select Business Type</option>
                                    <option value="Beauty and Personal Care">Beauty and Personal Care</option>
                                    <option value="Casual">Casual</option>
                                    <option value="Charities, Education and Membership">Charities, Education and Membership</option>
                                    <option value="Food and Drink">Food and Drink</option>
                                    <option value="Health Cate and Fitness">Health Cate and Fitness</option>
                                    <option value="Home and Repair">Home and Repair</option>
                                    <option value="Leisure and Entertainment">Leisure and Entertainment</option>
                                    <option value="Professional Services">Professional Services</option>
                                    <option value="Retail">Retail</option>
                                    <option value="Transportation">Transportation</option>
                                    <option value="Other">Other</option>
                                </select>
                                
                            
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label" for="modern-country">How will you process transactions?</label>
                            <select v-model="address_details.process_transaction" class="form-control" id="modern-country2">
                                <option value="">Select Proecess Transaction</option>
                                
                                <option value="Retail (face-to-face)" >Retail (face-to-face)</option>
                                <option value="Mobile (on-the-go)" >Mobile (on-the-go)</option>
                                <option value="MOTO (hand0keyed transactions">MOTO (hand keyed transactions</option>
                                <option value="E-Commerece (your-website)">E-Commerece (your-website)</option>
                                <option value="Transportation">Transportation</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label" for="modern-first-name">Product or Service Sold (explain in full)</label>
                            <input v-model="address_details.service_sold" type="text" id="modern-first-name" class="form-control" placeholder="John" />
                        </div>
                    </div>
                    
                    
                    <h3>Business Address</h3>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-first-name">Address</label>
                            <input v-model="address_details.business_address" type="text" id="modern-first-name" class="form-control" placeholder="Address" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-last-name">Street Name</label>
                            <input type="text" v-model="address_details.business_street" id="modern-last-name" class="form-control" placeholder="Street Name" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-first-name">City</label>
                            <input type="text" v-model="address_details.business_city" id="modern-first-name" class="form-control" placeholder="Address" />
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group">
                            <label class="form-label" for="modern-country1">State</label>
                            <select v-model="address_details.business_state"  class="form-control" name="business_state" id="business_state">
                                <option value=""></option>
                                
                                <option value="Alabama">Alabama</option>
                                <option value="Alaska">Alaska</option>
                                <option value="Arizona">Arizona</option>
                                <option value="Arkansas">Arkansas</option>
                                <option value="California">California</option>
                                <option value="Colorado">Colorado</option>
                                <option value="Connecticut">Connecticut</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-first-name">Zip Code</label>
                            <input type="text" v-model="address_details.business_zip" id="modern-first-name" class="form-control" placeholder="Zip Code" />
                        </div>
                    </div>

                    <h3>Shipping Address</h3>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-first-name">Address</label>
                            <input v-model="address_details.shipping_address" type="text" id="modern-first-name" class="form-control" placeholder="Address" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-last-name">Street Name</label>
                            <input v-model="address_details.shipping_street" type="text" id="modern-last-name" class="form-control" placeholder="Street Name" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-first-name">City</label>
                            <input v-model="address_details.shipping_city" type="text" id="modern-first-name" class="form-control" placeholder="Address" />
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group">
                            <label class="form-label" for="modern-country2">State</label>
                            <select v-model="address_details.shipping_state" class="form-control" id="modern-country4">
                                <option value=" "></option>
                                
                                <option value="Alabama">Alabama</option>
                                <option value="Alaska">Alaska</option>
                                <option value="Arizona">Arizona</option>
                                <option value="Arkansas">Arkansas</option>
                                <option value="California">California</option>
                                <option value="Colorado">Colorado</option>
                                <option value="Connecticut">Connecticut</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="modern-first-name">Zip Code</label>
                            <input v-model="address_details.shipping_zip" type="text" id="modern-first-name" class="form-control" placeholder="Zip Code" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button @click="validateSecondTab()" :disabled="disableSecondFormButton" type="button" value="Next" class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">{{savingSecondForm ? "Submitting..." : "Next"}}</span>
                            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                        </button>
                    </div>
                </form>
            </div>
            
            <div id="fees_and_charges" class="content">
                <div class="content-header">
                    <h5 class="mb-0">Charges and Fees</h5>
                    <small>Enter Your Charges and Fees</small>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="form-label" for="modern-address">Business Website</label>
                        <input type="text" id="modern-address" class="form-control" placeholder="Business Website" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="modern-landmark">Percent Ownership</label>
                        <input type="text" id="modern-landmark" class="form-control" placeholder="Percent Ownership" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="pincode3">Billing Type</label>
                        <input type="text" id="pincode3" class="form-control" placeholder="Billing Type" />
                    </div>
                </div>
                <div class="row">
                    <div class="custom-control custom-checkbox col-md-12 ">
                        <input type="checkbox" class="custom-control-input" id="validationCheckBootstrap" required />
                        <label class="custom-control-label" for="validationCheckBootstrap">Agree to our terms and conditions</label>
                        <div class="invalid-feedback">I don't have a website</div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-1 form-group col-md-6">
                        <label class="form-label" for="city3">How Many days from the sale does it take customer to get your product or receive your service</label>
                        <select class="form-control " id="modern-country5">
                            <option label=" "></option>
                            
                            <option>Same Day</option>
                            <option>1-5 Days</option>
                            <option>6-15 Days</option>
                            <option>16-30 Days</option>
                            <option>More than 30 Days</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="pincode3">Estimated Average Monthly Credit Card Sales</label>
                        <input type="text" id="pincode3" class="form-control" placeholder="Average Monthly Sales" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="city3">Estimated Average Individual Credit Card Sale</label>
                        <input type="text" id="city3" class="form-control" placeholder="Average Individual Sales" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="city3">Estimated Highest Individual Credit Card Sale</label>
                        <input type="text" id="city3" class="form-control" placeholder="Highest Individual Sales" />
                    </div>
                </div>
                <h3>Services Fee</h3>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="form-label" for="pincode3">Set-Up Fee</label>
                        <input type="text" id="pincode3" class="form-control" placeholder="Setup Fee" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="city3">Batch Fee</label>
                        <input type="text" id="city3" class="form-control" placeholder="Batch Fee" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="city3">Address Verification</label>
                        <input type="text" id="city3" class="form-control" placeholder="Address Verification" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="form-label" for="pincode3">Account on File Fee Monthly</label>
                        <input type="text" id="pincode3" class="form-control" placeholder="Account on File Fee Monthly" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="city3">Wireless Activation Fee</label>
                        <input type="text" id="city3" class="form-control" placeholder="Wireless Activation Fee" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="city3">Gateway Setup Fee</label>
                        <input type="text" id="city3" class="form-control" placeholder="Gateway Setup Fee" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="form-label" for="pincode3">Annual Fee</label>
                        <input type="text" id="pincode3" class="form-control" placeholder="Annual Fee" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="city3">Wireless Monthly Fee</label>
                        <input type="text" id="city3" class="form-control" placeholder="Annual Fee" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="city3">Gateway Transaction Fee</label>
                        <input type="text" id="city3" class="form-control" placeholder="Gateway Transaction Fee" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="form-label" for="pincode3">Retrieval Fee</label>
                        <input type="text" id="pincode3" class="form-control" placeholder="Retrieval Fee" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="city3">Monthly Minimum Fee</label>
                        <input type="text" id="city3" class="form-control" placeholder="Monthly Minimum Fee" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="city3">Gateway Monthly Fee</label>
                        <input type="text" id="city3" class="form-control" placeholder="Gateway Monthly Fee" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="pincode3">Chargeback Fee</label>
                        <input type="text" id="pincode3" class="form-control" placeholder="Chargeback Fee" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="city3">Monthly Membership Fee</label>
                        <input type="text" id="city3" class="form-control" placeholder="Monthly Membership Fee" />
                    </div>
                </div>
                <h3>COST PLUS</h3>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="pincode3">Visa MVC, Discover cost plus</label>
                        <input type="text" id="pincode3" class="form-control" placeholder="Visa MVC, Discover cost plus" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="city3">AMEX Cost Plus</label>
                        <input type="text" id="city3" class="form-control" placeholder="AMEX Cost Plus" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="pincode3">Transaction Fee</label>
                        <input type="text" id="pincode3" class="form-control" placeholder="Transaction Fee" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="city3">Authorization Fee</label>
                        <input type="text" id="city3" class="form-control" placeholder="Authorization Fee" />
                    </div>
                </div>
                
                <!-- ATM PIN DEBIT -->
                <h3>ATM PIN DEBIT</h3>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="pincode3">PIN Debit Processing</label>
                        <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="validationCheckBootstrap" required />
                                <label class="custom-control-label" for="validationCheckBootstrap">Yes</label>
                                
                            </div>
                    </div>
                    
                    
                </div>
                <div hidden class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="city3">PIN Debit Trans Fee</label>
                        <input type="text" id="city3" class="form-control" placeholder="PIN Debit Trans Fee" />
                    </div>
                </div>
                <h3>EBT</h3>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="pincode3">EBT Processing</label>
                        <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="validationCheckBootstrap" required />
                                <label class="custom-control-label" for="validationCheckBootstrap">Yes</label>
                                
                            </div>
                    </div>
                    
                </div>
                <div hidden class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="pincode3">EBT Per Item</label>
                        <input type="text" id="pincode3" class="form-control" placeholder="658921" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="pincode3">FNS Number</label>
                        <input type="text" id="pincode3" class="form-control" placeholder="658921" />
                    </div>
                    
                </div>
                
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev">
                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                        <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                    </button>
                </div>
            </div>

            <div id="owner_detail" class="content">
                <div class="content-header">
                    <h5 class="mb-0">Owner's Detail</h5>
                    <small>Detail</small>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-address">Owner's First Name:</label>
                        <input type="text" id="modern-address" class="form-control" placeholder="Owner's Legal Name:" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-address">Owner's First Name:</label>
                        <input type="text" id="modern-address" class="form-control" placeholder="Owner's Legal Name:" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-first-name">Street Number</label>
                        <input type="text" id="modern-first-name" class="form-control" placeholder="Address" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-last-name">Street Name</label>
                        <input type="text" id="modern-last-name" class="form-control" placeholder="Street Name" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-first-name">City</label>
                        <input type="text" id="modern-first-name" class="form-control" placeholder="Address" />
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group ">
                        <label class="form-label" for="modern-country3">State</label>
                        <!-- <select class="select2 " id="modern-country6">
                            <option label=" "></option>
                            
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option>Arizona</option>
                            <option>Arkansas</option>
                            <option>California</option>
                            <option>Colorado</option>
                            <option>Connecticut</option>
                        </select> -->
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-first-name">Zip Code</label>
                        <input type="text" id="modern-first-name" class="form-control" placeholder="Zip Code" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-first-name">Drivers license*</label>
                        <input type="text" id="modern-first-name" class="form-control" placeholder="Drivers license" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="dob-bootstrap-val">DOB</label>
                            <input type="text" class="form-control flatpickr-validation flatpickr" id="dob-bootstrap-val" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please Enter Your DOB</div>
                    </div>
                </div>
                <label>Note: After Review and approval a Merchant Identification Number (MID) will be issued and the account will be in the entity's name.</label>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-first-name">Owner's Social Security Number (for I.D. verification purposes only):*</label>
                        <input type="text" id="modern-first-name" class="form-control" placeholder="Security Number" />
                    </div>
                </div>
                
                <label>Note: After Review and approval a Merchant Identification Number (MID) will be issued and the account will be in the entity's name.</label>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-first-name">Legal Name of Business (as it appears on your tax return):*</label>
                        <input type="text" id="modern-first-name" class="form-control" placeholder="Legal Name" />
                    </div>
                </div>

                <p>Note: If you have not registered your business yet use your legal name (you can always change it later.</p>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-first-name">Type of Business Ownership</label>
                        <!-- <select class="select2 " id="modern-country7">
                            <option label=" "></option>
                            
                            <option>Sole Ownership/Sole Prop</option>
                            <option>Partnership</option>
                            <option>Corporation</option>
                            <option>Government</option>
                            <option>Non Profit/Tax Exempt</option>
                            <option>Limited Liability Corporation (LLC)</option> -->
                            
                        <!-- </select> -->
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="modern-first-name">Federal Tax ID*</label>
                        <input type="text" id="modern-first-name" class="form-control" placeholder="Federal Tax ID" />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="form-label" for="modern-first-name">Employer Identification Number (EIN number)*</label>
                        <input type="text" id="modern-first-name" class="form-control" placeholder="" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="modern-first-name">How long was the business established?</label>
                        <!-- <select class="select2 " id="modern-country9">
                            <option label=" "></option>
                            
                            <option>Lest than a year</option>
                            <option>1 year</option>
                            <option>2 Years</option>
                            <option>3 Years</option>
                            <option>4 Years</option>
                            <option>5 Years+</option>
                            
                        </select> -->
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="modern-first-name">How many months ago was business established?</label>
                        <select class="select2 " id="modern-country3">
                            <option label=" "></option>
                            
                            <option>1 Month</option>
                            <option>2 Month</option>
                            <option>3 Month</option>
                            <option>4 Month</option>
                            <option>5 Month</option>
                            <option>6 Month</option>
                            <option>7 Month</option>
                            <option>8 Month</option>
                            <option>9 Month</option>
                            <option>10 Month</option>
                            <option>11 Month</option>
                        </select>
                    </div>
                </div>

                <p>Note: Your tax ID will be used for tax reporting purposes only. You can edit this information later. If you do not have a EIN please use SSN</p>
                
                
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev">
                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                        <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                    </button>
                </div>
            </div>

            <div id="transaction_detail" class="content">
                <div class="content-header">
                    <h5 class="mb-0">Transaction Detail</h5>
                    <small>Enter Your Transaction Detail.</small>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="form-label" for="modern-twitter">Bank Name for deposits:</label>
                        <input type="text" id="modern-twitter" class="form-control" placeholder="Bank Name for deposits:" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="modern-facebook">Routing/Transit Number:*</label>
                        <input type="text" id="modern-facebook" class="form-control" placeholder="Routing/Transit Number:" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="modern-facebook">Account Number:</label>
                        <input type="text" id="modern-facebook" class="form-control" placeholder="Account Number:" />
                    </div>
                </div>
                <label class="form-label" for="modern-twitter">We need the account and routing so we can program your device/software so you are ready to accept all types of payments when your account is approved:</label>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="form-label" for="modern-twitter">Application and Terms of Use</label>
                        <textarea class="form-control" id="validationBioBootstrap" name="validationBioBootstrap" rows="3" required></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev">
                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-success btn-submit">Submit</button>
                </div>
            </div>
        
        </div>
    </div>    
</template>
<script>
export default {
    data() {
        return {
            business_information: {
                businessName: '',
                business_phone: '',
                business_email: '',
                business_email_confirmation: '',
                agent_office_rep_name: ''
            },
            address_details:{
                business_type:'',
                process_transaction:'',
                service_sold:'',
                business_address:'',
                business_street:'',
                business_city: '',
                business_state:'',
                business_zip:'',
                same_as_business_address:'',
                shipping_address:'',
                shipping_street:'',
                shipping_city:'',
                shipping_state:'',
                shipping_zip:''
            },
            app_id: '',
            savingFirstForm: false,
            savingSecondForm: false,
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
            errors: null,
            errors2: null,
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
        
    },
    
    computed: {
        disableFirstFormButton() {
            return this.savingFirstForm ? true: false
        },
        disableSecondFormButton() {
            return this.savingSecondForm ? true: false
        },
    },

    methods: {

        //Submit First Form
        validateFirstTab() {
            this.savingFirstForm = true;
            axios.post(base_url + "apps/business-information", this.business_information)
                .then(response => {
                    this.errors = null;
                    this.savingFirstForm = false;
                    this.showMessage(response.data);
                    this.app_id = response.data.app_id
                    // this.formValidation()
                })
                .catch(err => {
                if (err.response) {
                    // this.formValidation()
                    this.errors = err.response.data.errors;
                    this.savingFirstForm = false;
                    
                }
            });
        },
        validateSecondTab() {
            this.savingSecondForm = true;
            axios.post(base_url + "apps/address-details/" + this.app_id, this.address_details)
                .then(response => {
                    this.errors2 = null;
                    this.savingSecondForm = false;
                    this.showMessage(response.data);
                    this.app_id = response.data.app_id
                    // this.formValidation()
                })
                .catch(err => {
                if (err.response) {
                    // this.formValidation()
                    this.errors2 = err.response.data.errors;
                    this.savingSecondForm = false;
                    
                }
            });
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

        showMessage(data) {
            if (data.status  == "success") {
                this.$toast.success(data.message, 'Success Alert', this.notificationSystem.options.success );
            } else {
                this.$toast.error(data.message, "Error Alert", this.notificationSystem.options.error);
            }
        },
            
    },
}
</script>