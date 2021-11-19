$(async function () {
  const url = "http://localhost:8000/index.php";
  await $.get(url)
    .done((data) => {
      // 👈 とてもシンプル
      console.log("hello");
      console.log(data);

      let trAll = "";

      data.forEach((element, index) => {
        console.log(element["contents"]);
        console.log(element["endDateTime"]);
        console.log(element["place"]);
        console.log(element["startDateTime"]);
        console.log(element["eventID"]);

        const tr =
          "<tr>" +
          '<th scope="row">' +
          index +
          "<td>" +
          element["contents"] +
          '<button class="btn delete" style="background-color: #ff3366; margin-left: 12px;" id=' +
          element["eventID"] +
          ">削除</button>" +
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
          "</tr>";

        trAll = trAll + tr;
      });
      $("#test").html(trAll);
    })
    .fail((error) => {
      console.log(error);
    });

  $("#event").click(function () {
    alert("hello");
    let a = window.sessionStorage.getItem(["id"]);
    console.log(a);
  });

  $("#formRemove").submit(function () {
    alert("削除しました");
  });

  $(".delete").click(function () {
    let idStr = $(this).attr("id");
    console.log(idStr);
    console.log("hello");
  });

  // if document is ready
  //   alert("ログインしました");
});
