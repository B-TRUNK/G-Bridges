function idForm(){

                var selectvalue = $('input[name=choice]:checked', '#idForm').val();

                            if(selectvalue == "regular"){
                            window.open('http://localhost/gcp/forms/selectmembership.php','_self');
                            return true;
                            }
                            else if(selectvalue == "business"){
                            window.open('http://localhost/gcp/forms/businessmembers.php','_self');
                            return true;
                            }else if(selectvalue == 'employer'){
                            window.open('http://localhost/gcp/forms/employer.php','_self');
                            return true;
                            }
                            return false;
        };
        