<script src="https://use.fontawesome.com/667b767e3e.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script type="text/javascript">
String.prototype.contains = function(str) { return this.search(str) != -1; }; function f_cbload(v_isSSL, v_subdomain, v_appKey, v_isDotNet) { var Base64 = { _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=", encode: function(e) { var t = ""; var n, r, i, s, o, u, a; var f = 0; e = Base64._utf8_encode(e); while(f < e.length) { n = e.charCodeAt(f++); r = e.charCodeAt(f++); i = e.charCodeAt(f++); s = n >> 2; o = (n & 3) << 4 | r >> 4; u = (r & 15) << 2 | i >> 6; a = i & 63; if(isNaN(r)) { u = a = 64; } else if(isNaN(i)) { a = 64; } t = t + this._keyStr.charAt(s) + this._keyStr.charAt(o) + this._keyStr.charAt(u) + this._keyStr.charAt(a); } return t; }, _utf8_encode: function(e) { e = e.replace(/\r\n/g, "\n"); var t = ""; for(var n = 0; n < e.length; n++) { var r = e.charCodeAt(n); if(r < 128) { t += String.fromCharCode(r); } else if(r > 127 && r < 2048) { t += String.fromCharCode(r >> 6 | 192); t += String.fromCharCode(r & 63 | 128); } else { t += String.fromCharCode(r >> 12 | 224); t += String.fromCharCode(r >> 6 & 63 | 128); t += String.fromCharCode(r & 63 | 128); } } return t; } }; v_isDotNet = v_isDotNet ? '&dotnet=true' : ''; document.write('\n<style type="text/css">\n\x3c!--\n #cxkg {visibility:hidden; font-size:6px; position:relative; }\n--\x3e\n</style>\n'); if((window.location.pathname + window.location.search).contains(/(DP[.]ASP[?]APPKEY[=])|(DP[.]ASP[?]APPSESSION[=])/i)) { document.write("<br/><strong>Error - Cannot display DataPage due to multiple embedded deployments.</strong></br>"); } else { var v_query = "cbqe=" + Base64.encode("AppKey=" + v_appKey + "&js=true" + v_isDotNet + "&pathname=" + window.location.protocol + "//" + window.location.host + window.location.pathname + "&" + window.location.search.substring(1)) + "&cbEmbedTimeStamp=" + new Date().valueOf(); document.write("<scri" + 'pt type="text/javascript" src="ht' + 'tp' + (v_isSSL ? 's' : '') + "://" + v_subdomain + "/dp.asp?" + v_query + '"></scr' + "ipt>"); } };</script>
<script type="text/javascript">try{f_cbload(true, "c2dzk310.caspio.com", "fe4840000f6f0d968f944376bcc3");}catch(v_e){;}</script>
<script>
users = [];
$.get("http://108.167.182.37/~findglasses/jangkoo/list_user.php",function(data){
users = (JSON.parse(data).result.users);
console.log(users);
for (i = 0; i < users.length; i++) { 
    user_mail = users[i].email;
	$("span[class^='cbResultSetData_']").each(function( index ) {
		var parrent = $( this ).parent();
		var _have_data = false;
		if(user_mail.trim() == $( this ).text().trim() ){
			_have_data = true;
			parrent.append("<div style='margin-bottom:10px'> <button style ='padding:10px; border-radius:5px; background-color:#04B4AE' onclick='event.preventDefault();create_qr_code(\""+users[i].apikey+"\")'><i class=\"fa fa-plus-square-o\"></i>&nbsp;Create new QR code</button><button style ='padding:10px; border-radius:5px; background-color:#FF0000' onclick='event.preventDefault(); delete_qr_user(\""+user_mail.trim()+"\");' ><i class=\"fa fa-trash-o\"></i>&nbsp;Delete QR user</button><button onclick='event.preventDefault();' data-toggle=\"modal\" data-target=\"#myModal\" style ='padding:10px; border-radius:5px; background-color:#80FF00' ><i class=\"fa fa-pencil-square-o\"></i>&nbsp;Edit</button></div>");
			parrent.append("<div> User's QR codes <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span: </div> ");
			editModal = "<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>"
						  +"<div class='modal-dialog' role='document'>"
							+"<div class='modal-content'>"
							  +"<div class='modal-header'>"
								+"<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"
								+"<h4 class='modal-title' id='myModalLabel'>Edit User QR info</h4>"
							  +"</div>"
							  +"<div class='modal-body'> "
								+"<div class='input-group'>"
								  +"<span class='input-group-addon' id='basic-addon1'>Login name</span>"
								  +"<input type='text' class='form-control' placeholder='loginname' value='"+users[i].loginname+"' aria-describedby='basic-addon1'>"
								+"</div>"
								+"<div class='input-group'>"
								  +"<span class='input-group-addon' id='basic-addon1'>First name</span>"
								  +"<input type='text' class='form-control' placeholder='loginname' value='"+users[i].firstname+"' aria-describedby='basic-addon1'>"
								+"</div>"
								+"<div class='input-group'>"
								  +"<span class='input-group-addon' id='basic-addon1'>Last name name</span>"
								  +"<input type='text' class='form-control' placeholder='loginname' value='"+users[i].lastname+"' aria-describedby='basic-addon1'>"
								+"</div>"
								+"<div class='input-group'>"
								 +" <input type='text' class='form-control' placeholder='Recipient's username' aria-describedby='basic-addon2'>"
								  +"<span class='input-group-addon' id='basic-addon2'>@example.com</span>"
								+"</div>"

								+"<div class='input-group'>"
								 +" <span class='input-group-addon'>$</span>"
								 +" <input type='text' class='form-control' aria-label='Amount (to the nearest dollar)'>"
								 +" <span class='input-group-addon'>.00</span>"
								+"</div>"

								+"<label for='basic-url'>Your vanity URL</label>"
								+"<div class='input-group'>"
								 +" <span class='input-group-addon' id='basic-addon3'>https://example.com/users/</span>"
								 +" <input type='text' class='form-control' id='basic-url' aria-describedby='basic-addon3'>"
								+"</div>"
							  +"</div>"
							  +"<div class='modal-footer'>"
								+"<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>"
								+"<button type='button' class='btn btn-primary'>Save changes</button>"
							  +"</div>"
							+"</div>"
						  +"</div>"
						+"</div>";
			parrent.append(editModal);
			$.get("http://108.167.182.37/~findglasses/jangkoo/get_qr_code.php?key="+users[i].apikey,function(data){
				qrcodes = (JSON.parse(data).result.qrcodes);
				if (qrcodes!=null)
				for(var index in qrcodes ){
					console.log(qrcodes[index]);
					//console.log($( this ).parent());
					if (qrcodes[index].qr!=null)
					parrent.append("<div style='margin:5px;padding:10px' > <a style ='padding:10px; border-radius:5px; background-color:#04B4AE' href='"+qrcodes[index].qr+"'> <i class=\"fa fa-download\"></i> QR "+(index + 1)+"</a><button style ='padding:10px; border-radius:5px; background-color:#1b926c' onclick='event.preventDefault(); ' data-toggle=\"modal\" data-target=\"#"+index+"\"><i class=\"fa fa-eye\"></i>&nbsp;Show</button> <div class='modal fade' id='"+index+"' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'> <div class='modal-dialog' role='document'><div class='modal-content'><img src='"+qrcodes[index].qr+"' /></div></div></div>");
				}
			});
			parrent.css({'padding-bottom':'200px',});
		}
		if(!_have_data){
			//parrent.append("<div>NO QR DATA</div>");
		}
		});
	}
});
function create_qr_code(key){
	console.log(key);
	$.get("http://108.167.182.37/~findglasses/jangkoo/user_create_qr_code.php?key="+key,function(data){
		location.reload();
		
		console.log(data);
	});
}
function delete_qr_code(key){
	console.log(key);
	$.get("http://108.167.182.37/~findglasses/jangkoo/user_create_qr_code.php?key="+key,function(data){
		location.reload();
		
		console.log(data);
	});
}
function delete_qr_user(email){
	var txt;
	var email = String(email);
	var loginname = email.substring(0,email.indexOf("@"));
    var r = confirm("Are you sure to delete this user's QR data? &nbsp; </br> .Caution: Please be aware that by using this method all QR Codes, tracking data and landing pages of this user will be deleted.");
    if (r == true) {
        txt = "You pressed OK!";
		$.get("http://108.167.182.37/~findglasses/jangkoo/delete_user.php?loginname="+loginname,function(data){
		location.reload();
		
		console.log(data);
	});
    } else {
        txt = "You pressed Cancel!";
    }
}
</script>