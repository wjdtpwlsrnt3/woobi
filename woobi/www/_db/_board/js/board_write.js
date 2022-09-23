let userId = document.querySelector("#board-id");
let hit = document.querySelector("#board-repeat-id");
let timer = null;

userId.focus();

userId.addEventListener("keyup", function (e) {
    clearTimeout(timer);
    timer = setTimeout(chkId, 1000, this.value);
});

function chkId(val) {
    if (val.length === 0) {
        hit.innerHTML = "";
        return false;
    } else {
        var http = new XMLHttpRequest();
        http.onreadystatechange = function () {
            if (this.status == 200 && this.readyState == this.DONE) {
                if (JSON.parse(http.response)['result'] == 'y') {
                    hit.style.color = "green";
                    hit.innerHTML = "ȸ���Դϴ�."
                    inputBlank()
                } else {
                    hit.style.color = "red";
                    hit.innerHTML = "ȸ���� ��� �����մϴ�."
                    userId.value = "";
                }
            }
        }
        http.open("GET", "repeat_id.php?repeat=" + val, true);
        http.send();
    }
}

let userPw = document.querySelector("#board-pw");
let hitpw = document.querySelector("#board-repeat-pw");

userPw.focus();

userPw.addEventListener("keyup", function (e) {
    clearTimeout(timer);
    timer = setTimeout(chkPw, 1000, this.value);
});

function chkPw(val) {
    if (val.length === 0) {
        hitpw.innerHTML = "";
        return false;
    } else {
        var http = new XMLHttpRequest();
        http.onreadystatechange = function () {
            if (this.status == 200 && this.readyState == this.DONE) {
                if (JSON.parse(http.response)['result'] == 'y') {
                    hitpw.style.color = "green";
                    hitpw.innerHTML = "ȸ���Դϴ�."
                    inputBlank()
                } else {
                    hitpw.style.color = "red";
                    hitpw.innerHTML = "��й�ȣ�� ��ġ���� �ʽ��ϴ�."
                    userPw.value = "";
                }
            }
        }
        http.open("GET", "repeat_pw.php?repeat=" + val, true);
        http.send();
    }
}