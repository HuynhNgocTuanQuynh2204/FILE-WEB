/*===============Slider card product===================*/
var swiper = new Swiper(".slider-frame.List_promotional-products", {
  slidesPerView: 5,
  spaceBetween: 16,
  loop: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: false,
});

var swiper = new Swiper(".slider-frame.List_ProductSupport-function", {
  slidesPerView: 5,
  spaceBetween: 16,
  loop: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".ProductSupport-function_btn_right",
    prevEl: ".ProductSupport-function_btn_left",
  },
});

var swiper = new Swiper(".slider-frame.List_ProductFavorite-brand", {
  slidesPerView: 4,
  spaceBetween: 28,
  loop: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: false,
});

var swiper = new Swiper(".slider-frame.List_ProductsArranged_group", {
  slidesPerView: 5,
  spaceBetween: 16,
  loop: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".ProductsArranged_group_btn_right",
    prevEl: ".ProductsArranged_group_btn_left",
  },
});

var swiper = new Swiper(".swiper.goc-suc-khoe-content", {
  slidesPerView: 4,
  spaceBetween: 16,
  loop: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next-4",
    prevEl: ".swiper-button-prev-4",
  },
});
var swiper = new Swiper(".slider-frame.List_ProductMost-sold", {
  slidesPerView: 4,
  spaceBetween: 16,
  loop: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".DescriptionBestseller_btn_right",
    prevEl: ".DescriptionBestseller_btn_left",
  },
});

var swiper = new Swiper(".slider-frame.Product-just-viewed", {
  slidesPerView: 5,
  spaceBetween: 20,
  loop: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".Product-just-viewed_btn_right",
    prevEl: ".Product-just-viewed_btn_left",
  },
});

/*==============dropdown menu================*/
//dropdown
const dropdownCateMenuItems = document.querySelectorAll(
  ".CategoryMenu_product-content"
);
dropdownCateMenuItems.forEach((dropdownContentItem) => {
  dropdownContentItem.addEventListener("mouseover", ({ target }) => {
    const dropdownItem = target.closest(".CategoryMenu_product-content");
    if (dropdownItem) {
      dropdownCateMenuItems.forEach((item) => item.classList.remove("CategoryMenu_product-content-active"));
      dropdownItem.classList.add("CategoryMenu_product-content-active");
    }
  });
});

const btnsCateMenuItems = document.querySelectorAll(".CategoryMenuTab_item");
btnsCateMenuItems.forEach((dropbtn) => {
  dropbtn.addEventListener("mouseover", (event) => {
    const closestDropBtn = dropbtn.closest(".CategoryMenuTab_item");
    const dropdownCateMenuItemsAfterDropBtn =
      closestDropBtn.nextElementSibling.querySelectorAll(
        ".CategoryMenu_product-content"
      );
    if (dropdownCateMenuItemsAfterDropBtn.length > 0) {
      dropdownCateMenuItemsAfterDropBtn.forEach((item) =>
        item.classList.remove("CategoryMenu_product-content-active")
      );
      dropdownCateMenuItemsAfterDropBtn[0].classList.add("CategoryMenu_product-content-active");
    }
  });
});

/*=================Đăng nhập================*/



/*----------------popup chat window------------------------*/
var ischatopen = false;
var ele = document.getElementById("chatbar");

function openChatBox() {
  if (ischatopen == false) {
    ele.classList.add("toggle");
    ischatopen = true;
    document
      .getElementById("chatOpen")
      .classList.remove("fa-facebook-messenger");
    document.getElementById("chatOpen").classList.add("fa-facebook-messenger");
  } else {
    ele.classList.remove("toggle");
    ischatopen = false;
    document.getElementById("chatOpen").classList.add("fa-facebook-messenger");
  }
}

function send() {
  console.log("Here");
  var chatBody = document.getElementById("chatBody");
  var Clientmsg = document.getElementById("MsgInput").value;
  document.getElementById("MsgInput").value = "";
  var divClient = document.createElement("div");
  divClient.classList.add("chat_box_body_self");

  divClient.innerHTML = Clientmsg;

  chatBody.append(divClient);

  var divBot = document.createElement("div");
  divBot.classList.add("chat_box_body_other");

  divBot.innerHTML = Clientmsg;
  setTimeout(function () {
    $("divBot").show();
  }, 5000);
  chatBody.append(divBot);
  chatBody.scrollTop = chatBody.scrollHeight;
}

