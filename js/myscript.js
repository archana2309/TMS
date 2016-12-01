/**
 * Created by Administrator on 2/12/16.
 */
function checkFile()
{
        var file = $('input[type="file"]').val();
        var exts = ['jpg','png','jpeg','gif'];

        // first check if file field has any value
        if ( file ) {
            // split file name at dot
            var get_ext = file.split('.');
            // reverse name to check extension
            get_ext = get_ext.reverse();
            // check file type is valid as given in 'exts' array
            if ($.inArray ( get_ext[0].toLowerCase(), exts ) > -1 )
            {
            }
            else
            {
                $("#file_img").val('');
                alert( 'Invalid file!' );
            }

        }
(jQuery);}

function allLetter(inputtxt)
{
    d
    var letters = /^[A-Za-z]+$/;
    if(inputtxt.value.match(letters))
    {
        return true;
    }
    else
    {
        alert("message");
        return false;
    }
}

/*first name validation */
function validate(key)
{
    var keycode = (key.which) ? key.which : key.keyCode;
    if ((keycode >= 65 && keycode <= 90) || (keycode >= 97 && keycode <= 122))
        return true;
    else
        return false;
}

/*Create Excel File */
function exportFile(e)
{
 var dt = new Date();
 var day = dt.getDate();
 var month = dt.getMonth() + 1;
 var year = dt.getFullYear();
 var hour = dt.getHours();
 var mins = dt.getMinutes();
 var postfix = day + "." + month + "." + year + "_" + hour + "." + mins;
 //creating a temporary HTML link element (they support setting file names)

    var a = document.createElement('a');
 //getting data from our div that contains the HTML table
 var data_type = 'data:application/vnd.ms-excel';
 var table_div = document.getElementById('dvData');
 var table_html = table_div.outerHTML.replace(/ /g, '%20');
  a.href = data_type + ', ' + table_html;
 //setting the file name
 a.download = 'List of visitors' + postfix + '.xls';
 //triggering the function
 a.click();
 //just in case, prevent default behaviour
 e.preventDefault();

    /*window.open('data:application/vnd.ms-excel,' + $('#hovertable').html());
    e.preventDefault();*/
(jQuery);}

