<!DOCTYPE html>

<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/sign_up.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>ȸ������</title>
</head>

<body>
    <div class="title">
        <h1>ȸ������</h1>
    </div>

    <div class="">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="sign_up_ok.php" method="POST">
                    <div class="input">
                        <label class="semi_title">���̵�</label>
                        <label class="red_point">*</label>
                        <input name="id" id="uid" minlength="5" maxlength="20" class="form-control" type="text" placeholder="5~20���� ���� �ҹ���, ���ڿ� Ư������(_),(-)" required>
                        <span id="uidr"></span>
                    </div>
                    <div class="input">
                        <label class="semi_title">��й�ȣ</label>
                        <label class="red_point">*</label>
                        <input required name="password" maxlength="16" id="pw" class="form-control" type="password" placeholder="8~16�� ���� �� �ҹ���, ����, Ư������" onkeyup="chkpw()">
                        <span id="pws" class="warning">
                            8~16�� ���� �� �ҹ���, ����, Ư�����ڸ� ����ϼ���.
                        </span>
                    </div>
                    <div class="input">
                        <label class="semi_title">��й�ȣȮ��</label>
                        <label class="red_point">*</label>
                        <input required name="password_check" maxlength="10" id="cpw" class="form-control" type="password" onkeyup="chkcpw()">
                        <span id="pwschk" class="warning">
                            ��й�ȣ�� ��ġ���� �ʽ��ϴ�.
                        </span>
                        <span id="pwsblank" class="warning">
                            �ʼ� ���� �Դϴ�.
                        </span>
                    </div>
                    <div class="input">
                        <label class="semi_title">�̸�</label>
                        <label class="red_point">*</label>
                        <input required name="name" id="name" class="form-control" type="text" placeholder="ex : ȫ�浿" onkeyup="chkname()">
                        <span id="names" class="warning">
                            �߸��� ���� �Դϴ�.
                        </span>
                    </div>
                    <div class="input">
                        <label class="semi_title">�ּ�</label>
                        <label class="red_point">*</label>
                        <input required name="adress" class="form-control" type="text" id="addr" readonly onclick="postcode()">
                        <span id="addrs" class="warning">
                            �ʼ� ���� �Դϴ�.
                        </span>
                    </div>
                    <div class="input">
                        <label class="semi_title">�������(8�ڸ�)</label>
                        <label class="red_point">*</label>
                        <input required name="birth" id="birth" class="form-control" type="text" maxlength="8" placeholder="ex) 1996�� 12�� 30�� = 19961230">
                        <span id="births" class="warning" onkeyup="chkbirth()">
                            �ʼ� ���� �Դϴ�.
                        </span>
                    </div>
                    <div class="input">
                        <label class="semi_title">���� (����)</label>
                        <select name="gender" id="gender" class="form-select">
                            <option value="man">����</option>
                            <option value="women">����</option>
                            <option value="noselect" selected>���þ���</option>
                        </select>
                    </div>
                    <div class="input">
                        <label class="semi_title">�̸��� (����)</label>
                        <input name="email" id="email" class="form-control" type="text" placeholder="ex) wjdtpwlsrnt3@naver.com" onkeyup="chkemail()">
                        <span id="emails" class="warning">
                            �ʼ� ���� �Դϴ�.
                        </span>
                    </div>
                    <div class="input">
                        <label id="phone_title">��ȭ��ȣ (����)</label>
                        <label id="front_number">010 -</label>
                        <input id="phone" name="phone" class="form-control" type="text" placeholder="�� �ڸ� 8�ڸ��� '-'��ȣ ���� �Է�" minlength="8" maxlength="8" onkeyup="chkphone()">
                        <span id="phone_check"></span>
                    </div>
                    <div>
                        <button id="signup" class="btn btn-lg btn-primary" style="width: 100%;"> �����ϱ�</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
</body>

</html>
<script src="./js/sign_up.js"></script>
<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>