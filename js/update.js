
function disp_data1(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","update.php?status=disp",false);
            xmlhttp.send(null);
            
            document.getElementById("table1").innerHTML = xmlhttp.responseText;
        }
function delete1(id){
    var xhr = new XMLHttpRequest();
    
    xhr.open("GET","update.php?status=delete&s_id="+id,false);
    console.log(xhr);
    xhr.send(null);
    disp_data1();
}
function insert1(){
    var sever_lvl = document.getElementById("severLevel").value;
    var tckt_no = document.getElementById("ticketNo").value;
    var sys_impact = document.getElementById("sysImpact").value;
    var descrp = document.getElementById("desc").value;
    var open_time = document.getElementById("openTime").value;
    var close_time = document.getElementById("closeTime").value;
    var stats = document.getElementById("stats").value;
    var add_comments = document.getElementById("comments").value;
    var xhr = new XMLHttpRequest();
    
    xhr.open("GET","update.php?status=insert&sever_lvl="+sever_lvl+"&tckt_no="+tckt_no+"&sys_impact="+sys_impact+"&descrp="+descrp+"&open_time="+open_time+"&close_time="+close_time+"&stats="+stats+"&add_comments="+add_comments,false);
    console.log(xhr);
    xhr.send(null);
    disp_data1();
    document.getElementById("severLevel").value="";
    document.getElementById("ticketNo").value="";
    document.getElementById("sysImpact").value="";
    document.getElementById("desc").value="";
    document.getElementById("openTime").value="";
    document.getElementById("closeTime").value="";
    document.getElementById("stats").value="";
    document.getElementById("comments").value="";
    
    
}
function edit1(id){
    var sever_lvl = "sever_lvl"+id;
    var servid = "serv"+id;

    var serv = document.getElementById(sever_lvl).innerHTML;
    document.getElementById(sever_lvl).innerHTML = "<input class='edit' type='text' value='"+serv+"' id='"+servid+"'>";
    
        var tckt_no = "tckt_no"+id;
    var tcktid = "tckt"+id;

    var tckt = document.getElementById(tckt_no).innerHTML;
    document.getElementById(tckt_no).innerHTML = "<input class='edit' type='text' value='"+tckt+"' id='"+tcktid+"'>";
    
        var sys_impact = "sys_impact"+id;
    var sysid = "sys"+id;

    var sys = document.getElementById(sys_impact).innerHTML;
    document.getElementById(sys_impact).innerHTML = "<input class='edit' type='text' value='"+sys+"' id='"+sysid+"'>";
    
        var descrp = "descrp"+id;
    var descrid = "descr"+id;

    var descr = document.getElementById(descrp).innerHTML;
    document.getElementById(descrp).innerHTML = "<input class='edit' type='text' value='"+descr+"' id='"+descrid+"'>";
    
        var open_time = "open_time"+id;
    var openid = "open"+id;

    var open = document.getElementById(open_time).innerHTML;
    document.getElementById(open_time).innerHTML = "<input class='edit' type='text' value='"+open+"' id='"+openid+"'>";
    
        var close_time = "close_time"+id;
    var closeid = "close"+id;

    var close = document.getElementById(close_time).innerHTML;
    document.getElementById(close_time).innerHTML = "<input class='edit' type='text' value='"+close+"' id='"+closeid+"'>";
    
        var stats = "stats"+id;
    var statid = "stat"+id;

    var stat = document.getElementById(stats).innerHTML;
    document.getElementById(stats).innerHTML = "<input class='edit' type='text' value='"+stat+"' id='"+statid+"'>";
    
        var add_comments = "add_comments"+id;
    var addid = "add"+id;

    var add = document.getElementById(add_comments).innerHTML;
    document.getElementById(add_comments).innerHTML = "<input class='edit' type='text' value='"+add+"' id='"+addid+"'>";
    
    
    updateid="update1"+id;
    editid="edit1"+id;
    document.getElementById(editid).style.visibility="hidden";
     document.getElementById(updateid).style.visibility="visible";
}

function update1(id){
        updateid="update1"+id;
    editid="edit1"+id;
    var servid = "serv"+id;
    var serv = document.getElementById(servid).value;

    var tcktid = "tckt"+id;
    var tckt = document.getElementById(tcktid).value;
    
        var sysid = "sys"+id;
    var sys = document.getElementById(sysid).value;
    
        var descrid = "descr"+id;
    var descr = document.getElementById(descrid).value;
    
        var openid = "open"+id;
    var open = document.getElementById(openid).value;
    
        var closeid = "close"+id;
    var close = document.getElementById(closeid).value;
    
        var statid = "stat"+id;
    var stat = document.getElementById(statid).value;
    
        var addid = "add"+id;
    var add = document.getElementById(addid).value;
    
    
    update_value(id,serv,tckt,sys,descr,open,close,stat,add);
    
    document.getElementById(editid).style.visibility="visible";
     document.getElementById(updateid).style.visibility="hidden";
     document.getElementById("sever_lvl"+id).innerHTML = serv;
     document.getElementById("tckt_no"+id).innerHTML = tckt;
     document.getElementById("sys_impact"+id).innerHTML = sys;
     document.getElementById("descrp"+id).innerHTML = descr;
     document.getElementById("open_time"+id).innerHTML = open;
     document.getElementById("close_time"+id).innerHTML = close;
     document.getElementById("stats"+id).innerHTML = stat;
     document.getElementById("add_comments"+id).innerHTML = add;
     
}

function update_value(id,serv,tckt,sys,descr,open,close,stat,add){
    
    var xhr = new XMLHttpRequest();
    
    xhr.open("GET","update.php?status=update&id="+id+"&sever_lvl="+serv+"&tckt_no="+tckt+"&sys_impact="+sys+"&descrp="+descr+"&open_time="+open+"&close_time="+close+"&stats="+stat+"&add_comments="+add,false);
    xhr.send(null);
    console.log(xhr);
    
}

function clearFirstTable(){
	document.getElementById("severLevel").value = "";
	document.getElementById("ticketNo").value   = "";
	document.getElementById("sysImpact").value  = "";
	document.getElementById("desc").value       = "";
	document.getElementById("openTime").value   = "";
	document.getElementById("closeTime").value  = "";
	document.getElementById("stats").value      = "";
	document.getElementById("comments").value   = "";
	
}

function disp_data2(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","update2.php?status=disp",false);
            xmlhttp.send(null);
            
            document.getElementById("table2").innerHTML = xmlhttp.responseText;
        }
function delete2(id){
    var xhr = new XMLHttpRequest();
    
    xhr.open("GET","update2.php?status=delete&e_id="+id,false);
    console.log(xhr);
    xhr.send(null);
    disp_data2();
}
function insert2(){
    var add_events = document.getElementById("addEvents").value;
    
    var xhr = new XMLHttpRequest();
    
    xhr.open("GET","update2.php?status=insert&add_events="+add_events,false);
    console.log(xhr);
    xhr.send(null);
    disp_data2();
    document.getElementById("addEvents").value="";
    
    
    
}
function edit2(id){
    var add_events = "add_events"+id;
    var eventid = "event"+id;

    var event = document.getElementById(add_events).innerHTML;
    document.getElementById(add_events).innerHTML = "<input class='edit' type='text' value='"+event+"' id='"+eventid+"'>";
    
    
    updateid="update2"+id;
    editid="edit2"+id;
    document.getElementById(editid).style.visibility="hidden";
     document.getElementById(updateid).style.visibility="visible";
}

function update2(id){
        updateid="update2"+id;
    editid="edit2"+id;
     var eventid = "event"+id;

    var event = document.getElementById(eventid).value;
    
    
    update_value2(id,event);
    
    document.getElementById(editid).style.visibility="visible";
     document.getElementById(updateid).style.visibility="hidden";
     document.getElementById("add_events"+id).innerHTML = event;
 
     
}

function update_value2(id,event){
    
    var xhr = new XMLHttpRequest();
    
    xhr.open("GET","update2.php?status=update&id="+id+"&add_events="+event,false);
    xhr.send(null);
    console.log(xhr);
    
}

function clearSecondTable(){
	document.getElementById("addEvents").value = "";
	
}

function disp_data3(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","update3.php?status=disp",false);
            xmlhttp.send(null);
            
            document.getElementById("table3").innerHTML = xmlhttp.responseText;
        }
function delete3(id){
    var xhr = new XMLHttpRequest();
    
    xhr.open("GET","update3.php?status=delete&g_id="+id,false);
    console.log(xhr);
    xhr.send(null);
    disp_data3();
}
function insert3(){
    var grp = document.getElementById("group").value;
    var sys_details = document.getElementById("sysDetails").value;
    var alert_count = document.getElementById("alertCount").value;
    var action_plan = document.getElementById("actionPlan").value;
    var eta = document.getElementById("eta").value;
    
    var xhr = new XMLHttpRequest();
    
    xhr.open("GET","update3.php?status=insert&grp="+grp+"&sys_details="+sys_details+"&alert_count="+alert_count+"&action_plan="+action_plan+"&eta="+eta,false);
    console.log(xhr);
    xhr.send(null);
    disp_data3();
 	 document.getElementById("group").value = "";
     document.getElementById("sysDetails").value = "";
     document.getElementById("alertCount").value = "";
     document.getElementById("actionPlan").value = "";
     document.getElementById("eta").value = "";
    
    
    
    
}
function edit3(id){
    var grp = "grp"+id;
    var grpid = "grp1"+id;

    var grp1 = document.getElementById(grp).innerHTML;
    document.getElementById(grp).innerHTML = "<input class='edit' type='text' value='"+grp1+"' id='"+grpid+"'>";
    
        var sys_details = "sys_details"+id;
    var sysid = "sys"+id;

    var sys = document.getElementById(sys_details).innerHTML;
    document.getElementById(sys_details).innerHTML = "<input class='edit' type='text' value='"+sys+"' id='"+sysid+"'>";
    
        var alert_count = "alert_count"+id;
    var alertid = "alert"+id;

    var alert = document.getElementById(alert_count).innerHTML;
    document.getElementById(alert_count).innerHTML = "<input class='edit' type='text' value='"+alert+"' id='"+alertid+"'>";
    
        var action_plan = "action_plan"+id;
    var actionid = "action"+id;

    var action = document.getElementById(action_plan).innerHTML;
    document.getElementById(action_plan).innerHTML = "<input class='edit' type='text' value='"+action+"' id='"+actionid+"'>";
    
        var eta = "eta"+id;
    var etaid = "eta1"+id;

    var eta1 = document.getElementById(eta).innerHTML;
    document.getElementById(eta).innerHTML = "<input class='edit' type='text' value='"+eta1+"' id='"+etaid+"'>";
    
    
    updateid="update3"+id;
    editid="edit3"+id;
    document.getElementById(editid).style.visibility="hidden";
     document.getElementById(updateid).style.visibility="visible";
}

function update3(id){
        updateid="update3"+id;
    editid="edit3"+id;
     var grpid = "grp1"+id;

    var grp1 = document.getElementById(grpid).value;
    
    var alertid = "alert"+id;

    var alert = document.getElementById(alertid).value;
    
    var actionid = "action"+id;

    var action = document.getElementById(actionid).value;
    
    var sysid = "sys"+id;

    var sys = document.getElementById(sysid).value;
    
    var etaid = "eta1"+id;

    var eta1 = document.getElementById(etaid).value;
    
    console.log(id,grp1,sys,alert,action,eta1);
    update_value3(id,grp1,sys,alert,action,eta1);
    
    document.getElementById(editid).style.visibility="visible";
     document.getElementById(updateid).style.visibility="hidden";
     document.getElementById("grp"+id).innerHTML = grp1;
     document.getElementById("sys_details"+id).innerHTML = sys;
     document.getElementById("alert_count"+id).innerHTML = alert;
     document.getElementById("action_plan"+id).innerHTML = action;
     document.getElementById("eta"+id).innerHTML = eta1;
 
     
}

function update_value3(id,grp1,sys,alert,action,eta1){
    
    var xhr = new XMLHttpRequest();
    
    xhr.open("GET","update3.php?status=update&id="+id+"&grp="+grp1+"&sys_details="+sys+"&alert_count="+alert+"&action_plan="+action+"&eta="+eta1,false);
    xhr.send(null);
    console.log(xhr);
    
}

function clearThirdTable(){
	 document.getElementById("group").value = "";
     document.getElementById("sysDetails").value = "";
     document.getElementById("alertCount").value = "";
     document.getElementById("actionPlan").value = "";
     document.getElementById("eta").value = "";
	
}