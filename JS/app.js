$(function(){
	$('#rollno').on('blur',function(){
		if(!/(\d{2}((CO)|(DCO)|(EE)|(DEE)|(EX)|(DEX)|(ME)|(DME)|(CE)|(DCE)|(CES)|(DCES))\d{2,3})/i.test(this.value)){
			alert("Invalid Roll No");
			this.value="";
			$(this).focus();
		}
	});

	$('#sname').on('keypress',function(e){
			if(/[^a-zA-Z ]/.test(e.key)){
				alert("Invalid Name. Only Alphabets and Spaces are allowed");
				this.value="";
				$(this).focus();
				return false;
			}
	});

	$('#address').on('blur',function(){
		if(this.value.length<5 || this.value.length>150){
			alert("Invalid Address. Length must be between 50 to 150 characters");
			this.value="";
			$(this).focus();
		}
	});

	$('#semail').on('blur',function(){
		if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$ /.test(this.value)){
			alert("Invalid Email");
			this.value="";
			$(this).focus();
			return false;
		}
	});
});