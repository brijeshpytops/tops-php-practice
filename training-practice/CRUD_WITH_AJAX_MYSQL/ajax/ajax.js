$(document).on("click", "#add-btn", function(e){
    var data = $('#user-form').serialize();
    $.ajax({
        data:data,
        type:"post",
        url: "backend/save.php",
        success:function(dataResult){
            console.log(dataResult, "-----");
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode == 200){
                $('#addUserModel').hide();
                alert("Data added successfully");
                location.reload();
            } else {
                alert("Error: " + dataResult.error);
            }
        }
    });
});

$(document).on('click', "#delete-user", function(e){
    var id=$(this).attr("data-id");
    var fullname=$(this).attr("data-name");
    var delBtnYes = document.getElementById('delete-popup-user');
    deletePopup = document.getElementById('delete-user-id');
    deletePopup.style.color = "red";
    delBtnYes.setAttribute("data-id", id);
    deletePopup.innerHTML = fullname
})

$(document).on('click', "#delete-popup-user", function(e){
    var id=$(this).attr("data-id");
    console.log(id)
})
