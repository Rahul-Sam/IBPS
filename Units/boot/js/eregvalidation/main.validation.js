// error handling Of issues IPA declare page
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  "use strict";
  $("form[name='dipa']").validate({
    // Specify validation rules
    errorElement: 'label', 
    //rules starts here  
    rules: 
    {
     //MSA declare date 
      einipa: {     
            required: true
            }  
    },//rules ends
    // Specify validation error messages
    messages:
     {
      //MSA declare date      
       einipa:{ 
                required: 'Please Mention the Issues in IPA',
                }
     },// message end
    
  });
});

////////////////////////////////////////////=================================/////////////////////////////////////
// error handling Of MSA declare page
$(function() {
	"use strict";
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='dmsa']").validate({
    // Specify validation rules
    errorElement: 'label', 
    //rules starts here  
    rules: 
    {
     //MSA declare date 
      msadt: {  
            required: true			
            },
     //MSA declare remarks  
      msdrm: {     
            required: true
            }  
    },//rules ends
    // Specify validation error messages
    messages:
     {
      //MSA declare date      
      msadt: { 
               required: 'Please Select MSA Date'
               },
       //MSA declare remarks        
       msdrm: { 
                required: 'Please Enter Remarks about MSA Signed'
                }
     },// message end
    
  });
});

////////////////////////////////////////////=================================/////////////////////////////////////
// error handling Of COO declare page
$(function() {
	"use strict";
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='dcoo']").validate({
    // Specify validation rules
    errorElement: 'label', 
    //rules starts here  
    rules: 
    {
     //BPO/ ITES Location Address  
      bpoloc: 
	        {  
            required: true,
            maxlength: 255,
            minlength:2
            //noSpacebeg: true			
            },
     //are in sqrft  
      ainsqft:
	        {     
            required: false,
			Decimald: true,
			maxlength: 16,
			min: 1			
            },
	 //employee count
      empcount: 
	       {     
            required: false,
			digits: true,
			maxlength: 8,
			min: 1
            },	
	 //cdoclease
	      cdoclease: 
	       {     
           required: false,
			fileType: {
                             types: ["pdf"]
                        },
            maxFileSize: {
                        "unit": "MB",
                        "size": 10
                    },
            //minFileSize: {
                        //"unit": "KB",
                        //"size": "10"
						//},
            },	            
	 //cdocphotographs
	      cdocphotographs: 
	       {     
           required: false,
			fileType: {
                           types: ["jpg", "jpeg", "png", "zip", "ZIP", "pdf", "PDF"]
                        },
            maxFileSize: {
                        "unit": "MB",
                        "size": 10
                    },            
            },	            
    //cdocstafflist
	cdocstafflist: 
	       {     
            required: false,
			fileType: {
                            types: ["pdf"]
                        },
            maxFileSize: {
                        "unit": "MB",
                        "size": 10
                    },            
            },	
   //cdocdotguidelines
   cdocdotguidelines: 
	       {     
            required: false,
			fileType: {
                            types: ["pdf"]
                        },
            maxFileSize: {
                        "unit": "MB",
                        "size": 10
                    },           
            },	

  //cdocdoundertaking
  cdocdoundertaking: 
	       {     
            required: false,
			fileType: {
                            types: ["pdf"]
                        },
            maxFileSize: {
                        "unit": "MB",
                        "size": 10
                    },
            },
		//cdocvideo
		  cdocvideo: 
				   {     
					required: false,
					fileType: {
								types: ["mp4","zip","ZIP"]
								},
					maxFileSize: {
								"unit": "MB",
								"size": 10
							}
					},
			  //cdocmemo
				  cdocmemo: 
						   {     
							required: false,
							fileType: {
											types: ["pdf"]
										},
							maxFileSize: {
										"unit": "MB",
										"size": 10
									}
							},
							
				//cdocmngstr
				  cdocmngstr: 
						   {     
							required: false,
							fileType: {
											types: ["pdf"]
										},
							maxFileSize: {
										"unit": "MB",
										"size": 10
									}
							},
						
				//cdocdin
				  cdocdin: 
						   {     
							required: false,
							fileType: {
											types: ["pdf"]
										},
							maxFileSize: {
										"unit": "MB",
										"size": 10
									}
							},
							//cdocdin
				  cdocother: 
						   {     
							required: false,
							fileType: {
											types: ["ZIP","zip"]
										},
							maxFileSize: {
										"unit": "MB",
										"size": 10
									}
							},
			
											   
    },//rules ends
    // Specify validation error messages
    messages:
     {
      //BPO/ ITES Location Address      
      bpoloc: { 
               required: 'Please Enter the BPO/ ITES Location Address.'
			   
               },
       //area in sqrft         
       ainsqft: { 
                required: 'Please Enter the Area of BPO location.'
                },
	  //employee count         
       empcount: { 
                required: 'Please Enter Number of Employees.'
                },		
	   //cdoc photographs        
       cdoclease: { 
                required: 'Please Upload Lease Deed/ Rent Agreement.'
				
                 },
	  //cdoc cdocphotographs        
       cdocphotographs: { 
                required: 'Please Upload Photographs of premise.'
                 },
     //cdocstafflist
	  cdocstafflist: { 
                required: 'Please Upload List of staff for the premise.'
                 },	
	//cdocdotguidelines
    cdocdotguidelines: 
	       {     
            required: 'Please Upload Document related to DOT guidelines.'
            },
	//cdocdoundertaking	
	cdocdoundertaking: 
	       {     
            required: 'Please Upload Document related to Undertaking.'
            },
     },// message end
	        submitHandler: function (form) {
            $('#loading').show();
            form.submit(); }
    
  });  
});

// error handling Of MSA declare page
$(function() {
	"use strict";
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='fcoosub']").validate({
    // Specify validation rules
    errorElement: 'label', 
    //rules starts here  
    rules: 
    {
     //COO date
      acoodt: {  
            required: true			
            } 
    },//rules ends
    // Specify validation error messages
    messages:
     {
    //COO date    
     acoodt:{ 
            required: 'Please Select CoO Date'
            }
     },// message end
    
  });
 /////////////////////////////////////////////// Start QPR  validatore /////////////////////////////////


//////////////////// for CSV File /////////////////////////////
    $("form[name='csvform']").validate({

        // Specify validation rules
        errorElement: 'label',
        //rules starts here  

        rules:
                {
                    //CSV File  Name 
                    csvfile: {
                        required: true,
                        extension: "csv",
                        maxFileSize: {"unit": "MB", "size": 10}
                    },
                    //Entity Turnover

                }, //rules ends
        // Specify validation error messages
        messages:
                {
                    //MSA declare date      
                    csvfile: {
                          required: 'Please select CSV/csv file',
                          extension: 'Please select CSV/csv file',
                          maxFileSize: 'File size should not be larger to 10 MB'
                    }
                }, // message end

    });
	
	$("form[name='monthdetailsform']").validate({

        // Specify validation rules
        errorElement: 'label',
        //rules starts here  

        rules:
                {
                    //area  of operation 

                    'aop[]': {
                        required: true,
                        minlength: 1

                    },
                    descript: {
                        required: true,
                    },
                    revenue: {
                        required: true,
                        number: true,
                        maxlength: 10,
                        minlength: 1

                    },

                }, //rules ends

        // Specify validation error messages
        messages:
                {
                    //Area of operation     
                    'aop[]': {
                        required: 'At least one area of operation checked'
                    },
                    //Description      
                    descript: {
                        required: 'Please enter discription of activity'
                    },
                    //Revenue      
                    revenue: {
                        required: 'Please enter revenue',
                        minlength: 'revenue too short',
                        maxlength: 'revenue too long',
                        number: 'Please Enter Numbers Only'
                    }
                } // message end

    });
    $("#ProjectSubmit").click(function () {
        $("form[name='porjform']").validate({

            errorElement: 'label',
            rules:
                    {

                        ProjectName: {
                            required: true

                        },
                        ClientName: {
                            required: true
                        },
                        CountryName: {
                            required: true
                        },
                        ProjectMonth: {
                            required: true,
                            number: true,
                            min: 1
                        },
                        Description: {
                            required: true

                        },
                        language: {
                            required: true

                        }

                    }, //rules ends

            // Specify validation error messages
            messages:
                    {
                        //Project name      
                        ProjectName: {
                            required: 'Please enter project name'
                        },
                        ClientName: {
                            required: 'Please enter client name'
                        },
                        CountryName: {
                            required: 'Please select country name'
                        },
                        ProjectMonth: {
                            required: 'Please enter month',
                            number: 'Numberic value allow',
                            min: 'minimum value 1 month'
                        },
                        Description: {
                            required: 'Please enter description'
                        },
                        language: {
                            required: 'Please enter language'
                        }

                    }

        });
    });

    $("form[name='QPRForm']").validate({

        errorElement: 'label',
        rules:
                {

                    uPDF: {
                        required: true,
                        fileType: {
                            types: ["pdf"]
                        },
                        maxFileSize: {
                            "unit": "MB",
                            "size": 25
                        }

                    }

                }, //rules ends

        // Specify validation error messages
        messages:
                {
                    //Project name      
                    uPDF: {
                        required: 'Please select signed MPR PDF/pdf file',
                        fileType: 'Please select PDF/pdf file',
                        maxFileSize: 'Max file size should be 25 MB'
                    }
                }

    });
	
});

///////////  VGF1 validation ///////////////////

$(function() {
  // Initialize form validation on the VGF1 form
  "use strict";
 $("form[name='dvgf']").validate({
    // Specify validation rules
    errorElement: 'label', 
    //rules starts here  
    rules: 
    {
     //vgf field name
      vgfclaimdated: {     
            required: true
            }  
    },//rules ends
    // Specify validation error messages
    messages:
     {
      //VGF1 validation message      
       vgfclaimdated:{ 
                required: 'Select VGF1 claim Date',
                }
     },// message end
 });
 
	$("form[name='itemform']").validate({
    // Specify validation rules
    errorElement: 'label', 
    //rules starts here  
    rules: 
    {
     //vgf field name
      filename: {     
             required: true,
           	 extension: "csv",
             maxFileSize: {"unit": "MB", "size": 10}
            }  
    },//rules ends
    // Specify validation error messages
    messages:
     {
      //VGF1 validation message      
       filename:{ 
                 required: 'Please select CSV/csv file',
                 extension: 'Please select CSV/csv file',
                 maxFileSize: 'File size should not be larger to 10 MB'
                }
     },// message end
    
  });
  ////////////// VGF file upload
   $("form[name='formffs']").validate({
    // Specify validation rules
    errorElement: 'label', 
    //rules starts here  
    rules: 
    {
      //ca file 
				  file1: 
						   {     
							required: true,
							fileType: {
											types: ["pdf","PDF"]
										},
							maxFileSize: {
										"unit": "MB",
										"size": 10
									},
							require_from_group: [1, ".file-group"]
							},
							//ca file 
				  file2: 
						   {     
							required: true,
							fileType: {
											types: ["pdf","PDF"]
										},
							maxFileSize: {
										"unit": "MB",
										"size": 10
									},
							require_from_group: [1, ".file-group"]
							},
							//ca file 
				  file3: 
						   {     
							required: true,
							fileType: {
											types: ["pdf","PDF"]
										},
							maxFileSize: {
										"unit": "MB",
										"size": 10
									},
							require_from_group: [1, ".file-group"]
							},
				  file4: 
						   {     
							required: false,
							fileType: {
											types: ["pdf","PDF"]
										},
							maxFileSize: {
										"unit": "MB",
										"size": 10
									},
							
							},
					 file5: 
						   {     
							required: false,
							fileType: {
											types: ["pdf","PDF"]
										},
							maxFileSize: {
										"unit": "MB",
										"size": 10
									},
							
							},
					file6: 
						   {     
							required: false,
							fileType: {
											types: ["pdf","PDF"]
										},
							maxFileSize: {
										"unit": "MB",
										"size": 10
									},
							
							},
					file7: 
						   {     
							required: false,
							fileType: {
											types: ["pdf","PDF","zip","ZIP"]
										},
							maxFileSize: {
										"unit": "MB",
										"size": 10
									},
							
							},
    },//rules ends
    // Specify validation error messages
    messages:
     {
      //VGF1 validation message      
       file1:{ 
                 required: 'Please select file',
                 fileType: 'Please select pdf/PDF file',
                 maxFileSize: 'File size should not be larger to 10 MB'
                },
				//VGF1 validation message      
       file2:{ 
                 required: 'Please select file',
                 fileType: 'Please select pdf/PDF file',
                 maxFileSize: 'File size should not be larger to 10 MB'
                },
				//VGF1 validation message      
       file3:{ 
                 required: 'Please select file',
                 fileType: 'Please select pdf/PDF file',
                 maxFileSize: 'File size should not be larger to 10 MB'
                },
		file4:{ 
                
                 fileType: 'Please select pdf/PDF file',
                 maxFileSize: 'File size should not be larger to 10 MB'
                },
		file5:{ 
                
                 fileType: 'Please select pdf/PDF file',
                 maxFileSize: 'File size should not be larger to 10 MB'
                },
		file6:{ 
                 
                 fileType: 'Please select pdf/PDF file',
                 maxFileSize: 'File size should not be larger to 10 MB'
                },
		file7:{ 
                 
                 fileType: 'Please select pdf/PDF  and zip file',
                 maxFileSize: 'File size should not be larger to 10 MB'
                },
     },// message end
    
  });
  
   
  
});