$(async function () {
  const url = "http://localhost:8000/index.php";

  await $.get(url)
    .done((data) => {
      let trAll = "";

      data.forEach((element, index) => {
        const tr =
          "<tr id=tr-" +
          element["eventID"] +
          ">" +
          '<th scope="row" id=update-' +
          index +
          " class=" +
          element["eventID"] +
          ">" +
          index +
          "<td>" +
          element["contents"] +
          "</td>" +
          "<td>" +
          element["startDateTime"] +
          "</td>" +
          "<td>" +
          element["endDateTime"] +
          "</td>" +
          "<td>" +
          element["place"] +
          "</td>" +
          ' <td><button class="btn delete" style="background-color: #ff3366; margin-left: 12px" id=' +
          element["eventID"] +
          ">削除</button></td>" +
          "</tr>";
        trAll = trAll + tr;
      });

      $("#test").html(trAll);
    })
    .fail((error) => {
      console.log(error);
    });
  console.log("sita");

  $(".delete").click(function () {
    let idStr = $(this).attr("id");
    console.log(idStr);

    console.log(typeof idStr);
    // $.ajax({
    //   url: "http://localhost:8000/delete.php",
    //   type: "POST",
    //   dataType: "json",
    //   data: { name: "test" },
    //   timeout: 3000,
    // })
    //   .done(function (data) {
    //     console.log("success");
    //     console.log(data);
    //   })
    //   .fail(function (error) {
    //     console.log("error");
    //     console.log(error);
    //   });

    $.post("http://localhost:8000/delete.php", { id: idStr })
      .done(function (data) {
        console.log(data);
        console.log("success");
        location.reload();
      })
      .fail(function (err) {
        console.log("error");
        console.log(err);
      });
  });

  //psot処理
  $("#the-form").submit(function (e) {
    e.preventDefault();
    let $form = $(this);
    let $button = $form.find("button");

    console.log($form.serialize());

    console.log("form");
    $.ajax({
      url: $form.attr("action"),
      type: $form.attr("method"),
      //formのdata取得
      data: $form.serialize(),
      timeout: 3000,

      // 送信前
      beforeSend: function (xhr, settings) {
        // ボタンを無効化し、二重送信を防止
        $button.attr("disabled", true);
      },
      // 応答後
      complete: function (xhr, textStatus) {
        // ボタンを有効化し、再送信を許可
        $button.attr("disabled", false);
      },
    })
      .done(function (data) {
        $form[0].reset();
        // location.reload();
      })
      .fail(function (error) {
        console.log("error");
        console.log(error);
      });
  });

  //update処理
  $("#the-update").submit(function (e) {
    e.preventDefault();
    let $form = $(this);
    let $button = $form.find("button");
    const eventNumber = $("input[name=eventNumber],#evenNumber").serialize();
    // console.log(eventNumber.slice(-1));
    console.log(eventNumber.slice(-1));
    const eventID = document.getElementById(
      "update-" + eventNumber.slice(-1)
    ).className;
    console.log(eventID);

    $.ajax({
      url: $form.attr("action"),
      type: $form.attr("method"),
      //formのdata取得
      data: $form.serialize() + "&eventID=" + eventID,
      timeout: 3000,
      // 送信前
      beforeSend: function (xhr, settings) {
        // ボタンを無効化し、二重送信を防止
        $button.attr("disabled", true);
      },
      // 応答後
      complete: function (xhr, textStatus) {
        // ボタンを有効化し、再送信を許可
        $button.attr("disabled", false);
      },
    })
      .done(function (data) {
        $form[0].reset();
        console.log(data);
        // location.reload();
      })
      .fail(function (error) {
        console.log("error");
        console.log(error);
      });
  });

  // if document is ready
  //   alert("ログインしました");
});
