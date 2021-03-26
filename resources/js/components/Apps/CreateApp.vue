<template>
    <div class="bs-stepper wizard-modern modern-wizard-example">
        <div class="bs-stepper-header">
            <div class="step" data-target="#account-details-modern">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-box">
                        <i data-feather="file-text" class="font-medium-3"></i>
                    </span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Account Details</span>
                        <span class="bs-stepper-subtitle">Setup Account Details</span>
                    </span>
                </button>
            </div>
            <div class="line">
                <i data-feather="chevron-right" class="font-medium-2"></i>
            </div>
            <div class="step" data-target="#personal-info-modern">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-box">
                        <i data-feather="user" class="font-medium-3"></i>
                    </span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Personal Info</span>
                        <span class="bs-stepper-subtitle">Add Personal Info</span>
                    </span>
                </button>
            </div>
            <div class="line">
                <i data-feather="chevron-right" class="font-medium-2"></i>
            </div>
            <div class="step" data-target="#address-step-modern">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-box">
                        <i data-feather="map-pin" class="font-medium-3"></i>
                    </span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Address</span>
                        <span class="bs-stepper-subtitle">Add Address</span>
                    </span>
                </button>
            </div>
            <div class="line">
                <i data-feather="chevron-right" class="font-medium-2"></i>
            </div>
            <div class="step" data-target="#social-links-modern">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-box">
                        <i data-feather="link" class="font-medium-3"></i>
                    </span>
                    <span class="bs-stepper-label">
                        <span class="bs-stepper-title">Social Links</span>
                        <span class="bs-stepper-subtitle">Add Social Links</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="bs-stepper-content">
            <div id="account-details-modern" class="content">
                <div class="content-header">
                    <h5 class="mb-0">Account Details</h5>
                    <small class="text-muted">Enter Your Account Details.</small>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-username">What is your business name?</label>
                        <input type="text" id="modern-business-name" class="form-control" placeholder="Business Name" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-phone-number">Business Phone number</label>
                        <input type="text" id="modern-email" class="form-control" placeholder="Business Phone Number" aria-label="john.doe" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group form-password-toggle col-md-6">
                        <label class="form-label" for="modern-password">Email</label>
                        <input type="email" id="modern-password" class="form-control" placeholder="abc@example.com" />
                    </div>
                    <div class="form-group form-password-toggle col-md-6">
                        <label class="form-label" for="modern-confirm-password">Confirm Email</label>
                        <input type="email" id="modern-confirm-password" class="form-control" placeholder="abc@example.com" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group form-password-toggle col-md-6">
                        <label class="form-label" for="modern-password">Agent Office/Sales Rep Name</label>
                        <input type="text" id="modern-password" class="form-control" placeholder="Agent Office/Sales Rep Name" />
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-outline-secondary btn-prev" disabled>
                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                        <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                    </button>
                </div>
            </div>
            <div id="personal-info-modern" class="content">
                <div class="content-header">
                    <h5 class="mb-0">Personal Info</h5>
                    <small>Enter Your Personal Info.</small>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="form-label" for="modern-country">What type of business is it?</label>
                        <select class="select2 w-100" id="modern-country1">
                            <option label=" "></option>
                            <option>Beauty and Personal Care</option>
                            <option>Casual</option>
                            <option>Charities, Education and Membership</option>
                            <option>Food and Drink</option>
                            <option>Health Cate and Fitness</option>
                            <option>Home and Repair</option>
                            <option>Leisure and Entertainment</option>
                            <option>Professional Services</option>
                            <option>Retail</option>
                            <option>Transportation</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="modern-country">How will you process transactions?</label>
                        <select class="select2 w-50" id="modern-country2">
                            <option label=" "></option>
                            
                            <option>Retail (face-to-face)</option>
                            <option>Mobile (on-the-go)</option>
                            <option>MOTO (hand0keyed transactions</option>
                            <option>E-Commerece (your-website)</option>
                            <option>Other</option>
                            <option>Transportation</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="modern-first-name">Product or Service Sold (explain in full)</label>
                        <input type="text" id="modern-first-name" class="form-control" placeholder="John" />
                    </div>
                </div>
                
                
                <label class="form-label mt-1 mb-1" for="modern-first-name"><b>First Name</b></label>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-first-name">Address</label>
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
                        <div class="form-group col-md-4">
                        <label class="form-label" for="modern-country">State</label>
                        <select class="select2 w-100" id="modern-country3">
                            <option label=" "></option>
                            
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option>Arizona</option>
                            <option>Arkansas</option>
                            <option>California</option>
                            <option>Colorado</option>
                            <option>Connecticut</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-first-name">Zip Code</label>
                        <input type="text" id="modern-first-name" class="form-control" placeholder="Zip Code" />
                    </div>
                </div>

                <label class="form-label mt-1 mb-1" for="modern-first-name"><b>First Name</b></label>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-first-name">Address</label>
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
                        <div class="form-group col-md-4">
                        <label class="form-label" for="modern-country">State</label>
                        <select class="select2 w-100" id="modern-country4">
                            <option label=" "></option>
                            
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option>Arizona</option>
                            <option>Arkansas</option>
                            <option>California</option>
                            <option>Colorado</option>
                            <option>Connecticut</option>
                        </select>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-first-name">Zip Code</label>
                        <input type="text" id="modern-first-name" class="form-control" placeholder="Zip Code" />
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
            <div id="address-step-modern" class="content">
                <div class="content-header">
                    <h5 class="mb-0">Address</h5>
                    <small>Enter Your Address.</small>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-address">Address</label>
                        <input type="text" id="modern-address" class="form-control" placeholder="98  Borough bridge Road, Birmingham" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-landmark">Landmark</label>
                        <input type="text" id="modern-landmark" class="form-control" placeholder="Borough bridge" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="pincode3">Pincode</label>
                        <input type="text" id="pincode3" class="form-control" placeholder="658921" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="city3">City</label>
                        <input type="text" id="city3" class="form-control" placeholder="Birmingham" />
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
            <div id="social-links-modern" class="content">
                <div class="content-header">
                    <h5 class="mb-0">Social Links</h5>
                    <small>Enter Your Social Links.</small>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-twitter">Twitter</label>
                        <input type="text" id="modern-twitter" class="form-control" placeholder="https://twitter.com/abc" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-facebook">Facebook</label>
                        <input type="text" id="modern-facebook" class="form-control" placeholder="https://facebook.com/abc" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-google">Google+</label>
                        <input type="text" id="modern-google" class="form-control" placeholder="https://plus.google.com/abc" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="modern-linkedin">Linkedin</label>
                        <input type="text" id="modern-linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
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
    
}
</script>