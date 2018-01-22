$(document).ready(function() {

    $('[data-tt="tooltip"]').tooltip();

    $('#inputIsCurrtCompany').change(function(){
        if(this.checked) {
            $("#inputCompanyToDt").prop('disabled', true);
        }else{
            $("#inputCompanyToDt").prop('disabled', false);
        }                   
    });

    $('#submitSaveCompany').click(function() {
        var httpURL = "/index.php/form_validation/ValidateandSaveProfessionalInfo";
        var dataString = $('#frmAddCompany').serialize();
        $.ajax({
            url: httpURL,
            type: "POST",
            data: dataString,
            dataType: "JSON",
            context: document.body
        }).done(function(data){                        
            console.log(data);
        });
    });

    $('#submitSaveExperience').click(function() {
        var httpURL = "/index.php/form_validation/ValidateandSaveExperienceInfo";
        var dataString = "inputSkillTitle="+$('#inputSkillTitle').val();
        $.ajax({
            url: httpURL,
            type: "POST",
            data: dataString,
            dataType: "JSON",
            context: document.body
        }).done(function(data){
            if(data.status =='0' && data.code=='200'){
                $('#addEditSkillInfo').modal('hide');
                location.reload();
            }
        });
    });

    $('#submitSaveEducation').click(function(){
        var httpURL = "/index.php/form_validation/ValidateandSaveEducationInfo";
        var dataString = $('#frmAddEdu').serialize();
        $.ajax({
            url: httpURL,
            type: "POST",
            data: dataString,
            dataType: "JSON",
            context: document.body
        }).done(function(data){
            if(data.status =='0' && data.code=='200'){
                $('#addEditEducation').modal('hide');
                location.reload();
            }
        });
    });

    $('#updateProfileInfo').click(function(){
        var httpURL = "/index.php/form_validation/ValidateandUpdateProfileInfo";
        var dataString = $('#UpdateProfile').serialize();
        $.ajax({
            url: httpURL,
            type: "POST",
            data: dataString,
            dataType: "JSON",
            context: document.body
        }).done(function(data){
            if(data.status =='0' && data.code=='200'){
                $('#addEditProfileInfo').modal('hide');
                location.reload();
            }
        });
    });

    $('#inputSkillTitle').keyup(function(){
        var httpURL =  "/index.php/form_validation/GetSkillList";
        var dataString = "inputSkillTitle="+$('#inputSkillTitle').val();
        $.ajax({
            url: httpURL,
            type: "POST",
            data: dataString,
            dataType: "JSON",
            context: document.body
        }).done(function(data){
            domElements='';
            if(data.length > 0){                           
                for(i=0;i<data.length;i++){
                    domElements += '<li class="list-group-item" data-value="'+data[i].skill_id+'"><a href="#">'+data[i].skill_name+'</a></li>'
                }
                $('#inputSkillList').html(domElements);
            }else{
                $('#inputSkillList').html(domElements);
            }
        });                  
    });

    $("#inputSkillList").on("click", "a", function(e){
        e.preventDefault();
        var $this = $(this).parent();
        $this.addClass("select").siblings().removeClass("select");
        var httpURL = "/index.php/form_validation/UpdateSkillSet";
        var dataString = "inputSkillID="+$this.data("value")+"&isCandidate=1";
        $.ajax({
            url: httpURL,
            type: "POST",
            data: dataString,
            dataType: "JSON",
            context: document.body
        }).done(function(data){
            skillSet='';
            if(data.status =='0' && data.code=='200'){
                $('#inputSkillList').html('');$('#inputSkillTitle').val('');
                skillSet += '<a href="#" class="badge badge-success" style="padding:0.5em 0.8em;margin:0.25rem">'+data.skillName+' <i class="fa fa-check fa-fw"></i></a>'
                $('#updateSkillList').append(skillSet);
            } 
        });
    });

    $('#inputJobSkills').keyup(function(){
        var httpURL = "/index.php/form_validation/GetSkillList";
        var dataString = "inputSkillTitle="+$('#inputJobSkills').val();
        $.ajax({
            url: httpURL,
            type: "POST",
            data: dataString,
            dataType: "JSON",
            context: document.body
        }).done(function(data){
            domElements='';
            if(data.length > 0){                           
                for(i=0;i<data.length;i++){
                    domElements += '<li class="list-group-item" data-value="'+data[i].skill_id+'"><a href="#">'+data[i].skill_name+'</a></li>';                    
                }
                $('#addJobSkillList').html(domElements);
                $('#addJobSkillListDiv').show();
            }else{
                $('#addJobSkillList').html(domElements);
                $('#addJobSkillListDiv').hide();
            }
        });                  
    });

    $("#addJobSkillList").on("click", "a", function(e){
        e.preventDefault();
        var $this = $(this).parent();
        $this.addClass("select").siblings().removeClass("select");
        var httpURL = "/index.php/form_validation/GetSkillSetInfo";
        var dataString = "inputSkillTitle="+$this.data("value");
        $.ajax({
            url: httpURL,
            type: "POST",
            data: dataString,
            dataType: "JSON",
            context: document.body
        }).done(function(data){
            skillSet='';
            if(data.length > 0){
                 var existingSkillIDs = new Array();
                for(i=0;i<data.length;i++){
                    
                    if(typeof($('#inputJobSkillsList').val())=='undefined' || $('#inputJobSkillsList').val() == ''){
                        alert('aaaa');
                        existingSkillIDs.push(data[i].skill_id);
                        skillSet = '<a href="#" class="badge badge-success" style="padding:0.5em 0.8em;margin:0.25rem">'+data[i].skill_name+' <i class="fa fa-check fa-fw"></i></a>';                       
                        $('#updateSkillList').append(skillSet);
                    }else{
                        alert('bbbb');
                        existingSkillIDs = $('#inputJobSkillsList').val().split(",");
                        if(existingSkillIDs.length<5){
                            if(!existingSkillIDs.includes(data[i].skill_id)){
                                existingSkillIDs.push(data[i].skill_id);
                                skillSet = '<a href="#" class="badge badge-success" style="padding:0.5em 0.8em;margin:0.25rem">'+data[i].skill_name+' <i class="fa fa-check fa-fw"></i></a>';
                                $('#updateSkillList').append(skillSet);
                            }                       
                        }else{
                            alert('Not more than 5 skills');
                        }
                    }
                    $('#inputJobSkillsList').val(existingSkillIDs);
                }
                alert(skillSet);
                
            }    
            $('#addJobSkillList').html();$('#inputJobSkills').val('');
            $('#addJobSkillListDiv').hide();        
        });
       
    });    

    $("#summaryShowLessAction").on("click", function(e){
        //e.preventDefault();
        $('#summaryShowMore').hide();
        $('#summaryShowLess').show();
        $('#summaryShowLessAction').hide();
        $('#summaryShowMoreAction').show();
    });

    $("#summaryShowMoreAction").on("click", function(e){
        //e.preventDefault();
        $('#summaryShowMore').show();
        $('#summaryShowLess').hide();
        $('#summaryShowLessAction').show();
        $('#summaryShowMoreAction').hide();
    });

    $('#GetAllUserSkills').click(function(){
        
    });
});

function GetAllUserSkills(){
    var httpURL = "/index.php/form_validation/GetAllUsersSkills";
    var dataString ='';
    $.ajax({
        url: httpURL,
        type: "POST",
        data: dataString,
        dataType: "JSON",
        context: document.body
    }).done(function(data){
        domElements ='';
        if(data.length > 0){                           
            for(i=0;i<data.length;i++){
                domElements += '<li class="list-group-item d-flex justify-content-between align-items-center">'+data[i].SKILL_NAME+'<span class="badge badge-success"><i class="fa fa-check"></i></span></li>'
            }
            domElements += '<li class="list-group-item active text-center" id="GetLessUserSkills" onClick="GetUsers5Skills()"><a><i class="fa fa-minus fa-fw"></i>Show less skills</a></li>';
            $('#addedskillList').html(domElements);
        }else{
            $('#addedskillList').html(domElements);
        }
    });
}

function GetUsers5Skills(){
    var httpURL = "/index.php/form_validation/GetFirst5UsersSkills";
    var dataString ='';
    $.ajax({
        url: httpURL,
        type: "POST",
        data: dataString,
        dataType: "JSON",
        context: document.body
    }).done(function(data){
        domElements ='';
        if(data.length > 0){                           
            for(i=0;i<data.length;i++){
                domElements += '<li class="list-group-item d-flex justify-content-between align-items-center">'+data[i].SKILL_NAME+'<span class="badge badge-success"><i class="fa fa-check"></i></span></li>'
            }
            domElements += '<li class="list-group-item active text-center" id="GetAllUserSkills" onClick="GetAllUserSkills()"><a><i class="fa fa-plus fa-fw"></i>Show more skills</a></li>';
            $('#addedskillList').html(domElements);
        }else{
            $('#addedskillList').html(domElements);
        }
    });
}

function editUserProfileInfo(usrProfileID){
    $.ajax({
        url : "/index.php/form_validation/GetUserProfileInfo/" + usrProfileID,
        type: "GET",
        dataType: "JSON",
        success: function(data){
            $("#UpdateProfile").trigger('reset');
            $("#addEditProfileInfo").modal("show");
            $('[name="inputUserFname"]').val(data.usersInfoDetails[0].USER_FNAME);
            $('[name="inputUserLname"]').val(data.usersInfoDetails[0].USER_LNAME);
            $('[name="inputRecentCompany"]').val(data.usrCompanyInfo[0].COMPANY_NAME);
            $('[name="inputUserSummary"]').val(data.usersInfoDetails[0].PROFILE_SUMMARY); 
            $('[name="inputIsInsertorUpdate"]').val(1);
            $('[name="inputuserCompanyID"]').val(usrProfileID);        
            /* */
        },
        error:function(jqXHR, textStatus, errorThrown){

        }
    });
}

function editUserExperience(usrExpID){
    $.ajax({
        url : "/index.php/form_validation/GetCompanyInfo/" + usrExpID,
        type: "GET",
        dataType: "JSON",
        success: function(data){
            $("#frmAddCompany").trigger('reset');
            $("#addEditCompanyInfo").modal("show");
            $('[name="inputRoleTitle"]').val(data.ROLE_H1);
            $('[name="inputCompany"]').val(data.COMPANY_NAME);
            $('[name="inputCompanyLocation"]').val(data.COMPANY_LOCATION);
            $('[name="inputIsInsertorUpdate"]').val(1);
            $('[name="inputuserCompanyID"]').val(usrExpID);
            if(data.COMPANY_WORKED_FROM!='' && data.COMPANY_WORKED_FROM!=null){
                $('[name="inputCompanyFrmDt"]').val(data.COMPANY_WORKED_FROM.slice(0,7));
            }
            if(data.COMPANY_WORKED_TILL!=''&& data.COMPANY_WORKED_TILL!=null){
                $('[name="inputCompanyToDt"]').val(data.COMPANY_WORKED_TILL.slice(0,7));
            }
            $('[name="inputIsCurrtCompany"]').prop('checked', data.IS_CURRENT_COMPANY);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }

    });
}

function editUserEducation(usrEduID){
    $.ajax({
        url : "/index.php/form_validation/GetEducationInfo/" + usrEduID,
        type: "GET",
        dataType: "JSON",
        success: function(data){
            $("#frmAddEdu").trigger('reset');
            $("#addEditEducation").modal("show");
            $('[name="inputSchoolName"]').val(data.INSTITUTION_NAME);
            $('[name="inputDegreeTitle"]').val(data.INSTITUTION_TITLE);
            $('[name="inputSpecializedStream"]').val(data.EDUCATION_FIELD);
            $('[name="inputIsInsertorUpdate"]').val(1);
            $('[name="inputuserEducationID"]').val(usrEduID);
            if(data.STUDIED_FROM!='' && data.STUDIED_FROM!=null){
                $('[name="inputEducationFrmDt"]').val(data.STUDIED_FROM.slice(0,7));
            }
            if(data.STUDIED_TILL!=''&& data.STUDIED_TILL!=null){
                $('[name="inputEducationToDt"]').val(data.STUDIED_TILL.slice(0,7));
            }                        
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }

    });
}

function ShowNotify(message, type){
    $.notify({           
        message: '<strong>'+message+'</strong>'
    },{
        type: type,
        placement: {
            from: 'top',
            align: 'center'
        },
        z_index: 9999,
        allow_dismiss: true,
        delay: duration,
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
        }
    });
}
function validateUserLogin(){
    alert('ddddd'+$('#inptUserFName').val());
    $.notify({           
        message: '<strong>qqqqqq</strong>'
    },{
        type: 'danger',
        placement: {
            from: 'top',
            align: 'center'
        },
        z_index: 9999,
        allow_dismiss: true,
        delay: duration,
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
        }
    });
    alert('gggggggggggg');
    if($('#inptUserFName').val()=='' || $('#inptUserFName').val() == null){
        ShowNotify('First Name field is required', 'danger');
        return false;
    }
}