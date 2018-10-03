<!DOCTYPE html>
<html lang="en" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
    <title>Welcome to iTrade Option</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="BitCoin and Ethereum Investment">
    <meta name="author" description="iTrade Option">
    <meta property="og:url"           content="{{ url('/') }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="iTrade Option" />
    <meta property="og:description"   content="a bitcoin and ethereum investment platform" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{!! asset('css/font-awesome.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/select2.css') !!}">

    <link rel="stylesheet" href="{!! asset('css/quirk.css') !!}">

    <link rel="icon" type="image/png" href="{!! asset('images/logo.png') !!}" width="40px">
    <script src="{!! asset('js/modernizr.js') !!}"></script>
    <!-- pass php vars to javascript -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'appUrl' => url("/"),
            'siteUser' => auth()->user(),
        ]); ?>
    </script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../lib/html5shiv/html5shiv.js"></script>
    <script src="../lib/respond/respond.src.js"></script>
    <![endif]-->
</head>

<body class="signwrapper"  style="background-color: orange;">
<div id="app">
    <div class="sign-overlay"></div>
    <div class="signpanel"></div>

    <div class="signup">
        <div class="row">
            <div class="col-sm-5">
                <div class="panel">
                    <div class="panel-heading">
                        <h1><a href="{!! asset('/') !!}"><img src="{!! asset('images/1.png') !!}" width="120" height="56"></a></h1>
                        <h4 class="panel-title">Create an Account!</h4>
                    </div>
                    <div class="panel-body">
                        <!--  <button class="btn btn-primary btn-quirk btn-fb btn-block">Sign Up Using Facebook</button>
                          <div class="or">or</div>-->
                        @if (session('success'))
                            <div class="alert alert-success">
                                <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="post" action="{{ url('account/post-register') }}" @keydown="clear($event.target.name)">
                            {{ csrf_field()}}
                            <div class="form-group mb15">
                                <input type="text" name="full_name"  class="form-control" value="{{ old('full_name') }}" placeholder="Enter Your Full Name">
                                @if ($errors->has('full_name'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('full_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb15">
                                <input type="text" name="username"  class="form-control" value="{{ old('username') }}" placeholder="Enter Your Username">
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb15">
                                <input type="email" name="email"  class="form-control" value="{{ old('email') }}" placeholder="Enter Your Email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb15">
                                <input type="password" name="password"  class="form-control" placeholder="Enter Your Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb15">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Enter Your Password Again">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb15">
                                <input type="text" name="btc"  class="form-control" value="{{ old('btc') }}" placeholder="Enter Your Bitcoin Wallet">
                                @if ($errors->has('btc'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('btc') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb15">
                                <input type="text" name="eth"  class="form-control" value="{{ old('eth') }}" placeholder="Enter Your Ethereum Wallet">
                                @if ($errors->has('eth'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('eth') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb15">
                                <input type="text" name="upline" class="form-control" value="{{ $user }}" placeholder="Enter Your Sponsor Username">
                                @if ($errors->has('upline'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('upline') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group mb15">
                                <input type="text" name="phone"  class="form-control" value="{{ old('phone') }}" placeholder="Enter Your Phone Number">
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group mb15">
                                <select name="country"  class="form-control">
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">France, Metropolitan</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                    <option value="Holy See">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                    <option value="Moldova">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                    <option value="Span">Spain</option>
                                    <option value="SriLanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States" selected="">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Yugoslavia">Yugoslavia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb15">
                                <input  name="state" type="text" placeholder="" class="form-control input-md" value="{{ old('state') }}" placeholder="Enter Your State">
                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb15">
                                <input  name="city" type="text" placeholder=""  class="form-control input-md" value="{{ old('city') }}" placeholder="Enter Your City">
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group mb20">
                                <label class="ckbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Accept terms and conditions</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-quirk btn-block">Create Account</button>
                                <a href="{!! route('auth.login') !!}" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">Already a member? Sign In Now!</a>
                            </div>
                        </form>
                    </div><!-- panel-body -->
                </div><!-- panel -->
            </div><!-- col-sm-5 -->
            <div class="col-sm-7">
                <div class="sign-sidebar">
                    <img src="{!! asset('images/1.jpg') !!}" />
                    <hr class="invisible">

                    <div class="form-group">
                        <a href="{!! route('auth.login') !!}" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">Already a member? Sign In Now!</a>
                    </div>
                </div><!-- sign-sidebar -->
            </div>
        </div>
    </div><!-- signup -->

</div>
<script src="{!! asset('js/jquery.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/select2.js') !!}"></script>
<script src="{!! asset('js/index.js') !!}"></script>
<script>
    $(function() {

        // Select2 Box
        $("select.form-control").select2({ minimumResultsForSearch: Infinity });

    });
</script>



</body></html>
