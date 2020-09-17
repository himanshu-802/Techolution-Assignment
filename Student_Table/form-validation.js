function formValidation(){
	var fir= document.registration.first;
		var las= document.registration.last;
		var clas= document.registration.class;
		var year= document.registration.yop;
		var perc= document.registration.percentage;
		var btn= document.getElementById("btnsub").disabled;
       
		if(name_validate(fir)){
			if(name_validate(las)){
				if(class_validate(clas)){
					if(year_validate(year)){
						if(perc_validate(perc)){
							alert ('Form Submitted Successfully');
							btn=false;
							return true;

						}
					}
				}
			}
		}
		return false;
}
	


function name_validate(fir){
	var letters = /^[0-9a-zA-Z]+$/;
	var len= fir.value.length;

if(!fir.value.match(letters) || len>20 || len==0)
{
	console.log("Plese");
alert('Please input alphanumeric characters only and maximum 20 characters in Name');
btn=true;
return false;
}
else
{
return true;
}

}

function class_validate(clas){
	var num=clas.value.length;
	if(num==0){
		alert("Please Enter class");
		btn=true;
		return false;
	}
	else{
		return true;
	}
}
function year_validate(year){
	var numbers= /^[0-9]+$/;
	var num=year.value;
	if(!year.value.match(numbers) || num>2016 || num==0){
		alert('Error: YOP,Please input numbers only and year below 2017 ')
		btn=true;
		return false;
	}
	else{
		return true;
	}
}

function perc_validate(perc){
	var numbers= /^[0-9]+$/;
	var num= perc.value.length;
	if(num==0 || !perc.value.match(numbers)){
		alert('Error: Percentage, Please Enter Numbers');
		btn=true;
		return false;
	}
	else{
		return true;
	}
}






	

