function previewTask(previewClass, formID, emailID, textID) {
    //this callback is executed after asynch call inside previewImage()
    var after = function () {
        //create preview of post
        var preview = document.getElementsByClassName(previewClass)[0];
        //copy email and text of post
        var emailValue = document.getElementById(emailID).value;
        var textValue = document.getElementById(textID).value;
        //replace dummy values
        preview.innerHTML = preview.innerHTML.replace('%js_replace_email%', emailValue);
        preview.innerHTML = preview.innerHTML.replace('%js_replace_text%', textValue);
        //make form invisible
        var form = document.getElementById(formID);
        form.style.display = 'none';
        //display preview
        preview.style.display = 'block';
    };

}

function closePreview(previewClass, formID) {
    var preview = document.getElementsByClassName(previewClass)[0];
    var form = document.getElementById(formID);
    form.style.display = 'block';
    //display preview
    preview.style.display = 'none';
}

function upload(formID) {
     {
        var form = document.getElementById(formID);
        form.submit();
     }
}