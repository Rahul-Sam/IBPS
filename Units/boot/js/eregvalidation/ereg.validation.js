
 // error handling of form1 entity registration
$(function() {
	"use strict";
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='eregistration']").validate({
    // Specify validation rules
    errorElement: 'label',

    //rules starts here  
    rules: { 
      //Entity Name    
      ename: {     
            required: true, 			
            maxlength: 100,
            minlength: 5
            },
      //Entity CIN
      ecin: {             			
            maxlength:21,
            minlength: 21,
			cin: true			                                
            },
      //Entity PAN
      epan: { 
            required: true,
		    maxlength:10,
            minlength: 10,
			pan: true     
            },
      //Entity Turnover
      eturnovr:
           {      
            required: true,
			      min : 0.01,
            maxlength: 10,
            minlength: 1,
            number: true
            },
     //Entity Type
      etype:"required",
    //Entity Address
    eaddress:
           {      
            required: true,
            maxlength: 200,
            minlength: 1
            },
  //Entity Pincode
    epincode:
           {      
            required: true,
            number:true,   
            maxlength: 6,
            minlength: 6
                     
            },
    //Entity adddress dtate       
    statsel:
           {      
            required: true                       
            },
   //Entity adddress district       
    disttsel:
           {      
            required: true                       
            },
    //Entity adddress city       
    citysel:
           {      
            required: true                       
            },
    //Entity Contact Person Name       
    cpname:
           {      
             required: true                       
          },
   //Entity Contact Person Designation       
    cpdesig:
            {      
             required: true                       
           },
    //Entity Contact Person Email 
    cpemail: 
            {
            required: true,        
            email: true
            },                      
   //Entity Contact Person Phone 
    cpphone :
            {
             required: true,
             number: true,
             maxlength:12,
             minlength:10
             //phoneNL:true
            }
     },
    // Specify validation error messages
    messages:
     { 
       //Entity Name         
       ename: { 
                required: 'Please enter Entity Name',
                minlength: 'Entity Name is too short',
                maxlength: 'Entity Name is too long'
                },
       //Entity CIN            
       ecin:  {                           
                minlength: 'CIN too short',
                maxlength: 'CIN too long'                          
                },
       //Entity PAN   
       epan: { 
                required: 'Please Enter PAN',
				maxlength:'PAN should contain only 10 alpha-numeric characters',
                minlength:'PAN should contain 10 alpha-numeric characters'                                        
                },
      //Entity TURNOVER 
       eturnovr: { 
                required: 'Please Enter Turnover',
                minlength: 'Turnover too short',
                maxlength: 'Turnover too long' ,
                number: 'Please Enter Numbers Only'                           
                }, 
      //Entity Type 
       etype: "Please select Entity Type", 

      //Entity Address         
       eaddress: { 
                required: 'Please Enter Entity Address',
                minlength: 'Entity Name is too short',
                maxlength: 'Entity Name is too long'
                },
      //Entity Pincode         
       epincode: { 
                required: 'Please Enter PINCODE',
                number: 'Please Enter a valid Pincode',
                minlength: 'PINCODE is too short',
                maxlength: 'PINCODE is too long'                
                },  

       //Entity state sel         
       statsel: { 
                required: 'Please Select State'
                },
      //Entity district sel         
       disttsel: { 
                required: 'Please Select District'
                },
       //Entity district sel         
       citysel: { 
                required: 'Please Select City'
                },

      //Contact Person Name
       cpname: {
                required: 'Please Enter Contact Person Name'                           
                },
       //Contact Person Name
       cpdesig: {
                required: 'Please Enter Contact Person Designation'                           
                },
     //Contact Person Email
       cpemail: {
                required: 'Please Enter Email address',
                email: 'Please Enter a valid email address'           
                },
    //Contact Person phone
      cpphone: {
                required: 'Please Enter Contact Person Phone',
                number: 'Please Enter a valid Phone Number',
                minlength:'Phone Number is too short',
                maxlength:'Phone Number is too long'
               } 
     },
    
  });
});

// error handling of form2 Add consortium
$(function() {
	"use strict";
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='step2']").validate({
    // Specify validation rules
    //errorElement: 'div',
    //debug: true,
   // errorClass: 'error',
   // validClass: 'success',
    errorElement: 'label', 

    //rules starts here  
    rules: 
    {
     //consortium Name    
      consname: {     
            required: true, 
            maxlength: 100,
            minlength: 5
            },
      //Prime bidder Name    
      selpbid: {     
            required: true          
            },
    
    },//rules ends
    // Specify validation error messages
    messages:
     {
     //Entity Name message         
       consname: { 
                required: 'Please Enter Consortium Name',
                minlength: 'Entity Name is too short',
                maxlength: 'Entity Name is too long'
                },
       //Prime bidder Name message         
       selpbid: { 
                required: 'Please Select Prime Bidder Name'               
                },

     },// message ends
    
  });
});

// error handling of form3 Add TC holding percentage
$(function() {
	"use strict";
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='step3']").validate({
    // Specify validation rules
    //errorElement: 'div',
    //debug: true,
    //errorClass: 'error',
    //validClass: 'success',
    errorElement: 'label', 
    //rules starts here  
    rules: 
    {
     //select consortium Name    
      selcons3: {     
            required: true
            },
      //Select bidder Name    
      selename3: {     
            required: true          
            },
       // TC holding percentage
       tcholdper:{     
            required: true,
            number: true,
			min: 1,
			max:100,
            minlength:1,
            maxlength:5          
            },    
    },//rules ends
    // Specify validation error messages
    messages:
     {
     //Entity Name message         
       selcons3:{ 
                required: 'Please Select Consortium Name'
                },
       //Prime bidder Name message         
       selename3:{ 
                required: 'Please Select Entity Name'               
                },
                // TC holding percentage
       tcholdper:{ 
                  required: 'Please Enter TC Holding Percentage',
				  min: 'Please enter non-negative numbers only'
                 }

     },// message ends
    
  });
});

// error handling of form4 Add location
$(function() {
	"use strict";
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='step4']").validate({
    // Specify validation rules
    errorElement: 'label', 
    //rules starts here  
    rules: 
    {
     //select consortium Name    
      selcons4: {     
            required: false
            },
     //select entity  
      selent4: {     
            required: true
            },
     //location state sel         
      statsel: { 
                required: true  
                 },
      //location district sel         
       disttsel: { 
                required: true 
                 },
       //location city sel         
       citysel: { 
                required: true  
                },
     //enter no of seats    
      nofseats: {     
            required: true,
            number: true,
      			min: 25,//updated from 50 to 25 as directed by Madhurjya Sir/ 18/06/2018
      			max: 5000,
            minlength: 2,
            maxlength:4
            },
      //enter bid amount    
      bidamt: {     
            required: true           
            },
     //select round    
     selround: {     
            required: true           
               },
    //select level(bidder)    
     sellevel: {     
            required: true           
               },
    //select ipadate   
     ipadate: {     
            required: true           
               },
    //upload IPA file  
     ipafile: {     
            required: true,
			fileType: {
                         types: ["pdf"]
                        },
            maxFileSize: {
                        "unit": "MB",
                        "size": 10
                    },
            minFileSize: {
                        "unit": "KB",
                        "size": "10"
						},
            }	   
    },//rules ends
    // Specify validation error messages
    messages:
     {
       //Select Consortium         
       selcons4:{ 
                required: false
                },
       //Select entity         
       selent4:{ 
                required: 'Please Select Entity',
                },
      //location state sel         
       statsel: { 
                required: 'Please Select State'
                },
      //location district sel         
       disttsel: { 
                required: 'Please Select District'
                },
       //location city sel         
       citysel: { 
                required: 'Please Select City'
                },
       //enter no of seats    
       nofseats: {     
            required: 'Please Enter No of seats',
            number: 'Please Enter Numbers only',
            minlength: 'No of seats are too small',
            maxlength:'No of seats are too large',
            },
       //Enter bid amount    
       bidamt: {     
            required: 'Please Enter Bid Amount',           
            },
      //select round    
      selround: {     
            required: 'Please Select Round',           
               },
     //select level(bidder)    
      sellevel: {     
            required: 'Please Select Level',           
               },
      //select ipa date    
      ipadate: {     
                required: 'Please Select IPA Date'				  
               },
               //select ipa date    
      ipafile: {     
               required: 'Please upload IPA File'                     
               }               

     },// message end
    
  });
});