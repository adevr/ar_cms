/**
 * ********************
 * função ver password
 * ********************
 */
function seePass() {
    if (password.type == 'text') password.type = 'password';
    else password.type = 'text';
}

/**
 * change active status
 * @param id
 */
function changeActive(id) {
    var element = document.querySelector('.active');
    element.classList.remove('active');
    document.getElementById(id).classList.add('active');
}