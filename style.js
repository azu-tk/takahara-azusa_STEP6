//①フォーム全体の取得、フォーム送信のイベント、チェック処理
//HTML側にid属性を追加
document.addEventListener("DOMContentLoaded", function () {
  const form = 
  document.getElementById("contactForm");

  form.addEventListener("submit", function (event) {
    if (!validateForm()) {
      event.preventDefault();
      return;
    };
  };

//②フォームの値を取得
function validateForm() {
  const name = document.getElementById("name").value;
  const companyName = document.getElementById("companyName").value;
  const email = document.getElementById("email").value;
  const age = document.getElementById("age").value;
  const message = document.getElementById("message").value;

//③確認メッセージ
  const confirmMessage =
    `下記の内容を本当に送信しますか？\n\n`
    +`名前：${name}\n`
    +`会社名：${companyName}\n`
    +`メールアドレス：${email}\n`
    +`年齢：${age}\n`
    +`お問い合わせ内容：${message}`;
//確認ダイアログ
  const isConfirmed =
  confirm(confirmMessage);

//キャンセルを押したら送信を中止
  if(!isConfirmed){
    event.preventDefault();
    }
  });
});


//④未入力チェック関数
function validateForm(){

//フォームの値を取得
  const name =
  document.getElementById("name").value.trim();
  const companyName =
  document.getElementById("companyName").value.trim();
  const email =
  document.getElementById("email").value.trim();
  const age =
  document.getElementById("age").value.trim();
  const message =
  document.getElementById("message").value.trim();

  const errorMessageDiv = document.getElementById("error-message");

  //未入力チェック
  if (
    name === "" ||
    companyName === "" ||
    email === "" ||
    age === "" ||
    message === ""
  ) {
//⑤エラーメッセージを表示
    errorMessageDiv.textContent ="必須項目が未入力です。入力内容をご確認ください。";
    return false; // フォームの送信をキャンセル
  }
//入力OKの場合
  errorMessageDiv.textContent = ""; // メッセージを消す
  return true; // フォームの送信許可
}
