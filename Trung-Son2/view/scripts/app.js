// /*=====================  Lấy địa chỉ tỉnh thành  ======================*/
// $(document).ready(function () {
//   // Listen for changes in the "province" select box
//   $("#province").on("change", function () {
//     var province_id = $(this).val();
//     // console.log(province_id);
//     if (province_id) {
//       // If a province is selected, fetch the districts for that province using AJAX
//       $.ajax({
//         url: "ajax_get_district.php",
//         method: "GET",
//         dataType: "json",
//         data: {
//           province_id: province_id,
//         },
//         success: function (data) {
//           // Clear the current options in the "district" select box
//           $("#district").empty();

//           // Add the new options for the districts for the selected province
//           $.each(data, function (i, district) {
//             // console.log(district);
//             $("#district").append(
//               $("<option>", {
//                 value: district.id,  
//                 text: district.name,
//               })
//             );
//           });
//           // Clear the options in the "wards" select box
//           $("#wards").empty();
//         },
//         error: function (xhr, textStatus, errorThrown) {
//           console.log("Error: " + errorThrown);
//         },
//       });
//       $("#wards").empty();
//     } else {
//       // If no province is selected, clear the options in the "district" and "wards" select boxes
//       $("#district").empty();
//     }
//   });

//   // Listen for changes in the "district" select box
//   $("#district").on("change", function () {
//     var district_id = $(this).val();
//     // console.log(district_id);
//     if (district_id) {
//       // If a district is selected, fetch the awards for that district using AJAX
//       $.ajax({
//         url: "ajax_get_wards.php",
//         method: "GET",
//         dataType: "json",
//         data: {
//           district_id: district_id,
//         },
//         success: function (data) {
//           // console.log(data);
//           // Clear the current options in the "wards" select box
//           $("#wards").empty();
//           // Add the new options for the awards for the selected district
//           $.each(data, function (i, wards) {
//             $("#wards").append(
//               $("<option>", {
//                 value: wards.id,
//                 text: wards.name,
//               })
//             );
//           });
//         },
//         error: function (xhr, textStatus, errorThrown) {
//           console.log("Error: " + errorThrown);
//         },
//       });
//     } else {
//       // If no district is selected, clear the options in the "award" select box
//       $("#wards").empty();
//     }
//   });
// });

/*==============dropdown menu================*/
//dropdown
const dropdownCateMenuItems = document.querySelectorAll(
  ".CategoryMenu_category-item"
);
dropdownCateMenuItems.forEach((dropdownContentItem) => {
  dropdownContentItem.addEventListener("mouseover", ({ target }) => {
    const dropdownItem = target.closest(".CategoryMenu_category-item");
    if (dropdownItem) {
      dropdownCateMenuItems.forEach((item) =>
        item.classList.remove("CategoryMenu_category-item-active")
      );
      dropdownItem.classList.add("CategoryMenu_category-item-active");
    }
  });
});

/*===============Slider card product===================*/
var swiper = new Swiper(".slider-frame.List_promotional-products", {
  slidesPerView: 5,
  spaceBetween: 16,
  loop: false,
  pagination: {
    clickable: true,
  },
  navigation: false,
});

var swiper = new Swiper(".slider-frame.List_ProductSupport-function", {
  slidesPerView: 5,
  spaceBetween: 16,
  loop: false,
  pagination: {
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
    clickable: true,
  },
  navigation: false,
});

var swiper = new Swiper(".slider-frame.List_ProductsArranged_group", {
  slidesPerView: 5,
  spaceBetween: 16,
  loop: false,
  pagination: {
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
    clickable: true,
  },
  navigation: {
    nextEl: ".Product-just-viewed_btn_right",
    prevEl: ".Product-just-viewed_btn_left",
  },
});

var mySwiper = new Swiper(".DescriptionSlider_banner-list", {
  loop: true,
  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return `<span class="outer-dot swiper-pagination-bullet"><span class="inner-dot"></span></span>`;
    },
  },
  navigation: false,
  speed: 2000,
  autoplay: {
    delay: 1500,
    disableOnInteraction: false,
  },
});

/*======================      MODEL ĐĂNG NHẬP   ============================*/
const BtnsAccount = document.querySelector(".HeaderPC_login_account");
const OpenModalLogin = document.querySelector(".DesktopModal_OverlayBase");
const MethodPhoneEnter = document.querySelector(
  "#Authentication_method_Phone-enter"
);
const MethodPhoneCode = document.querySelector(
  "#Authentication_method_Phone-code"
);
const MethodConfirmCodeOTP = document.querySelector(
  "#Authentication_method_ConfirmCode-OTP"
);
const MethodCreateACCOUNT = document.querySelector(
  "#Authentication_method_Create-Account"
);
const BtnConfirmPhone = document.querySelector(".SmsLoginForm_btn-confirm");
const BtnSendCodeOTP = document.querySelector(".SmsLoginForm_btn-code");
const AuthModalContent = document.querySelector(
  ".AuthModal_auth-modal_content"
);
const GeneratedOTPContainer = document.querySelector(".SendOTP_otp-time-out");
const SendAgainOTP = document.querySelector(".SendOTP_again");
let generatedOTP;
let countdownInterval;
let remainingTime = 120;
let isOTPMatched = false;
BtnsAccount.addEventListener("click", () => {
  OpenModalLogin.classList.add("DesktopModal_OverlayAfter-open");
});
const AuthModalBtnClose = document.querySelectorAll(".AuthModal_btn-close");

AuthModalBtnClose.forEach((BtnCloseModal) => {
  BtnCloseModal.addEventListener("click", () => {
    OpenModalLogin.classList.remove("DesktopModal_OverlayAfter-open");
    MethodPhoneEnter.style.display = "block";
    MethodPhoneCode.style.display = "none";
    MethodConfirmCodeOTP.style.display = "none";
    MethodCreateACCOUNT.style.display = "none";
  });
});

const FormSmsLogin = document.querySelector(".SmsLoginForm_wrapper-sms-login");
const InputPhoneNumber = document.querySelector(".SmsLoginForm_phone-input");
const BtnsConfirmSms = document.querySelector(".SmsLoginForm_btn-confirm");
const TextFeedback = document.createElement("div");
TextFeedback.className = "TextField_feedback";
BtnsConfirmSms.parentNode.insertBefore(TextFeedback, BtnsConfirmSms);

function validatePhoneNumber() {
  const phoneNumberAccount = InputPhoneNumber.value;
  const phoneNumberPattern = /((09|03|07|08|05)+([0-9]{8})\b)/g; // Check SĐT
  if (phoneNumberAccount === "") {
    // Nếu số điện thoại trống
    TextFeedback.innerText = "Vui lòng nhập số điện thoại của bạn.";
    TextFeedback.style.display = "block";
    InputPhoneNumber.style.background = "#fff";
    BtnConfirmPhone.classList.add("Button_button__disabled");
  } else if (!phoneNumberPattern.test(phoneNumberAccount)) {
    // Nếu số điện thoại không đúng mẫu
    TextFeedback.innerText = "Số điện thoại không hợp lệ, vui lòng thử lại.";
    TextFeedback.style.display = "block";
    InputPhoneNumber.style.background = "#fff";
    BtnConfirmPhone.classList.add("Button_button__disabled");
  } else {
    // Nếu số điện thoại hợp lệ
    TextFeedback.style.display = "none";
    BtnConfirmPhone.classList.remove("Button_button__disabled");
    savePhoneNumber(phoneNumberAccount);
  }
}
InputPhoneNumber.addEventListener("input", validatePhoneNumber);

BtnConfirmPhone.addEventListener("click", () => {
  const phoneNumberAccount = InputPhoneNumber.value;
  const phoneNumberPattern = /((09|03|07|08|05)+([0-9]{8})\b)/g; // Check SĐT
  if (phoneNumberPattern.test(phoneNumberAccount)) {
    // Nếu số điện thoại hợp lệ
    MethodPhoneEnter.style.display = "none";
    MethodPhoneCode.style.display = "block";
  }
});
// Lưu giá trị số điện thoại vào localStorage
function savePhoneNumber(value) {
  localStorage.setItem("phoneNumber", value);
}
// Lấy giá trị số điện thoại từ localStorage (nếu có)
function getSavedPhoneNumber() {
  return localStorage.getItem("phoneNumber");
}
// Cập nhật giá trị số điện thoại trong các modal khi tải lại trang
function updatePhoneNumber() {
  const phoneNumberElements = document.querySelectorAll(
    ".SendOTP_phone-hidden"
  );
  const savedPhoneNumber = getSavedPhoneNumber();
  // Kiểm tra xem giá trị đã được lưu trong localStorage hay chưa
  if (savedPhoneNumber) {
    phoneNumberElements.forEach((element) => {
      element.innerText = getSavedPhoneNumber();
    });
  }
}
InputPhoneNumber.addEventListener("input", () => {
  validatePhoneNumber();
  updatePhoneNumber();
});
// Sử dụng sự kiện DOMContentLoaded để gọi hàm cập nhật giá trị số điện thoại
window.addEventListener("DOMContentLoaded", updatePhoneNumber);
// Gắn sự kiện click cho .Btns-returnPhone
const BtnReturnPagePhone = document.querySelectorAll(".Btns-returnPhone");
// Lặp qua từng button và thêm sự kiện click
BtnReturnPagePhone.forEach((returnBtns) => {
  returnBtns.addEventListener("click", () => {
    MethodPhoneEnter.style.display = "block";
    MethodPhoneCode.style.display = "none";
    MethodConfirmCodeOTP.style.display = "none";
  });
});
const BtnReturnPhoAcc = document.querySelector(".AuthModal_auth-return-page");
BtnReturnPhoAcc.addEventListener("click", () => {
  MethodPhoneCode.style.display = "block";
  MethodConfirmCodeOTP.style.display = "none";
});
// Event listener for send code OTP button
BtnSendCodeOTP.addEventListener("click", () => {
  MethodPhoneCode.style.display = "none";
  MethodConfirmCodeOTP.style.display = "block";
  generatedOTP = generateOTP();
  remainingTime = 120; // Reset remainingTime thành thời gian mới (120 giây)
  startedCountdown();
  resetInputFields();
  // Display the generated OTP to the user
  alert(`Mã OTP của bạn: ${generatedOTP}`);
});

// Event listener for SendAgainOTP button click
SendAgainOTP.addEventListener("click", () => {
  generatedOTP = generateOTP(); // Tạo lại mã OTP mới
  resetInputFields();
  // Hiển thị mã OTP mới cho người dùng
  alert(`Mã OTP của bạn: ${generatedOTP}`);
});

// Function to start the countdown timer
function startedCountdown() {
  countdownInterval = setInterval(() => {
    remainingTime--;
    if (remainingTime === 0) {
      clearInterval(countdownInterval);
      BtnConfirmCodeOTP.disabled = true;
      GeneratedOTPContainer.textContent = "Thời gian OTP hết hiệu lực.";
      generatedOTP = null;
    } else {
      GeneratedOTPContainer.textContent = formatTime(remainingTime);
    }
  }, 1000);
}
function formatTime(seconds) {
  var minutes = Math.floor(seconds / 60);
  var remainingSeconds = seconds % 60;
  return (
    "Có hiệu lực trong " +
    minutes.toString().padStart(1, "0") +
    " phút " +
    remainingSeconds.toString().padStart(1, "0") +
    " giây"
  );
}
// Function to generate a random OTP
function generateOTP() {
  const digits = "0123456789";
  let OTP = "";
  for (let i = 0; i < 6; i++) {
    OTP += digits[Math.floor(Math.random() * 10)];
  }
  remainingTime = 120; // Reset remainingTime thành thời gian mới (120 giây)
  return OTP;
}
// Modify event listener for the input fields
const inputFields = document.querySelectorAll(".SendOTP_group-input-otp input");
const BtnConfirmCodeOTP = document.querySelector(".SmsLoginForm_btn_code-OTP"); // Nút xác nhận
const OtpFeedback = document.createElement("div");
const GeneratedOTPText = document.createElement("div");
OtpFeedback.className = "TextField_feedback";
GeneratedOTPText.className = "TextField_feedback";
BtnConfirmCodeOTP.parentNode.insertBefore(OtpFeedback, BtnConfirmCodeOTP);
BtnConfirmCodeOTP.parentNode.insertBefore(GeneratedOTPText, BtnConfirmCodeOTP);
// Event listener for OTP input fields
inputFields.forEach((input, index) => {
  input.addEventListener("input", () => {
    let otpValue = "";
    inputFields.forEach((input) => {
      otpValue += input.value;
    });
    if (otpValue === "") {
      BtnConfirmCodeOTP.classList.add("Button_button__disabled");
      OtpFeedback.innerText = "Vui lòng nhập mã OTP.";
      OtpFeedback.style.display = "block";
    } else if (otpValue !== generatedOTP) {
      BtnConfirmCodeOTP.classList.add("Button_button__disabled");
      OtpFeedback.innerText = "Mã OTP không chính xác.";
      OtpFeedback.style.display = "block";
    } else if (
      remainingTime === 0 &&
      otpValue === "" &&
      otpValue !== generatedOTP &&
      otpValue === generatedOTP
    ) {
      BtnConfirmCodeOTP.classList.add("Button_button__disabled");
      GeneratedOTPText.textContent = "Thời gian OTP hết hiệu lực.";
      GeneratedOTPText.style.display = "block";
      OtpFeedback.style.display = "none";
    } else if (otpValue === generatedOTP) {
      BtnConfirmCodeOTP.classList.remove("Button_button__disabled");
      OtpFeedback.style.display = "none";
    }
  });
});

// Event listener for button click to confirm OTP
BtnConfirmCodeOTP.addEventListener("click", () => {
  clearInterval(countdownInterval);
  let otpValue = "";
  inputFields.forEach((input) => {
    otpValue += input.value;
  });
  if (otpValue === generatedOTP) {
    MethodCreateACCOUNT.style.display = "block";
    MethodConfirmCodeOTP.style.display = "none";
  }
});

// Function to set focus on the input field
function setInputFocus(index) {
  inputFields.forEach(function (field, i) {
    field.classList.remove("custom_input-focus");
    if (i === index) {
      field.classList.add("custom_input-focus");
    }
  });
}

// Event listeners for input fields
inputFields.forEach(function (inputField, index) {
  inputField.addEventListener("input", function () {
    var filledCount = 0;
    inputFields.forEach(function (field) {
      if (field.value !== "") {
        filledCount++;
      }
    });
    if (this.value !== "" && index < inputFields.length - 1) {
      inputFields[index + 1].focus();
    }
  });

  inputField.addEventListener("keydown", function (event) {
    if (event.key === "Backspace" && this.value.length === 0) {
      var previousField = inputFields[index - 1];
      if (previousField) {
        previousField.focus();
      }
    }
  });

  inputField.addEventListener("focusin", function () {
    setInputFocus(index);
  });
});

// Function to reset input fields
function resetInputFields() {
  inputFields.forEach((input) => {
    input.value = "";
    input.classList.remove("custom_input-focus");
  });
}

/*=================   Vocher      =====================*/
const VocherBtnAction = document.querySelector(".VocherBtn_action");
const BtnVoucherClose = document.querySelector(".BtnVoucher_close");
const ComletedModalBtn = document.querySelector(".CompletedCoupon_button");
const BaseVoucherApplyModal = document.querySelector(".ReactModal__Overlay");
VocherBtnAction.addEventListener("click", () => {
  BaseVoucherApplyModal.classList.add(
    "BaseVoucherApplyModal_base-voucher-apply-modal-overlay"
  );
});
BtnVoucherClose.addEventListener("click", () => {
  BaseVoucherApplyModal.classList.remove(
    "BaseVoucherApplyModal_base-voucher-apply-modal-overlay"
  );
});
ComletedModalBtn.addEventListener("click", () => {
  BaseVoucherApplyModal.classList.remove(
    "BaseVoucherApplyModal_base-voucher-apply-modal-overlay"
  );
});
function closeModal() {
  // Cập nhật hiển thị nút "Chọn mã"
  var selectButton = document.querySelector(".NumberPromotional_applied");
  const VoucherCardTitle = document.querySelector(
    ".CartSelector_Voucher-title"
  );
  const NumberPromotionalApplied = document.querySelector(
    ".NumberPromotional_applied"
  );
  if (selectedCoupons.length > 0) {
    VoucherCardTitle.innerText = "Mã khuyến mãi";
    NumberPromotionalApplied.innerHTML = "Đã áp dụng " + selectedCoupons.length;
    NumberPromotionalApplied.classList.add("NumberPromotional_applied_showw");
    VocherApplyBtnGroup.classList.add("VocherApply_btn-group-change");
  } else {
    VoucherCardTitle.innerText = "Ưu đãi & giảm giá";
    NumberPromotionalApplied.classList.remove(
      "NumberPromotional_applied_showw"
    );
    VocherApplyBtnGroup.classList.remove("VocherApply_btn-group-change");
  }
}
function handleCouponSelection(couponId) {
  const VoucherPromotionCard = document.querySelector(
    ".VoucherDiscount_promotion_card"
  );
  var CouponCardID = document.getElementById(couponId);
  const VoucherCartButton = CouponCardID.querySelector(
    ".VoucherDiscount_card-Button"
  );
  var couponConditionstitle = CouponCardID.querySelector(".coupon-explain");
  if (VoucherCartButton.innerText === "Chọn") {
    VoucherCartButton.innerText = "Bỏ chọn";
    CouponCardID.classList.add("VoucherDiscount_promotion_card-choose");
    couponConditionstitle.classList.add("coupon-explain-choose");
  } else {
    VoucherCartButton.innerText = "Chọn";
    CouponCardID.classList.remove("VoucherDiscount_promotion_card-choose");
    couponConditionstitle.classList.remove("coupon-explain-choose");
  }
}
// Lưu trữ danh sách các coupon đã chọn
var selectedCoupons = [];
function handleCouponSelection(couponId) {
  const VoucherPromotionCard = document.querySelector(
    ".VoucherDiscount_promotion_card"
  );
  var CouponCardID = document.getElementById(couponId);
  var VoucherCardImg = CouponCardID.querySelector("img");
  var VoucherDiscountRightTitle = CouponCardID.querySelector(
    ".VoucherDiscount_card-right-title"
  );
  var VoucherDataName = CouponCardID.getAttribute("data-coupon-name");
  var CouponNameParagraph = document.createElement("p");
  const VoucherCartButton = CouponCardID.querySelector(
    ".VoucherDiscount_card-Button"
  );
  // Lấy thông tin lớp 'coupon-conditions-apply-content' của coupon đã chọn
  var couponConditions = CouponCardID.querySelector(
    ".coupon-conditions-apply-content"
  );
  var couponConditionstitle = CouponCardID.querySelector(".coupon-explain");
  const existingCouponIndex = selectedCoupons.indexOf(couponId);
  if (existingCouponIndex === -1) {
    // Chọn coupon nếu chưa được chọn trước đó
    VoucherCartButton.innerText = "Bỏ chọn";
    CouponCardID.classList.add("VoucherDiscount_promotion_card-choose");
    couponConditionstitle.classList.add("coupon-explain-choose");
    selectedCoupons.push(couponId);
    // Lấy thông tin của coupon đã chọn
    CouponNameParagraph.textContent = "" + VoucherDataName;
    var selectedCouponImg = VoucherCardImg.cloneNode(true);
    var selectedCouponButton = document.createElement("button");
    selectedCouponButton.textContent = "Bỏ chọn";
    selectedCouponButton.onclick = function () {
      handleCouponSelection(couponId);
    };
    var selectedCouponDiv = document.createElement("div");
    selectedCouponDiv.classList.add("CouponSelected_wrap");
    var CouponSelectedWrap = document.querySelector(".CouponSelected_wrap");
    selectedCouponDiv.setAttribute("data-coupon-id", couponId);
    selectedCouponDiv.appendChild(selectedCouponImg);
    selectedCouponDiv.appendChild(CouponNameParagraph);
    // Tạo một phần tử HTML mới để hiển thị thông tin của lớp 'coupon-conditions-apply-content'
    var selectedCouponConditions = document.createElement("div");
    selectedCouponConditions.classList.add(
      "selected-coupon-conditions-display"
    );
    selectedCouponConditions.innerHTML = couponConditions.innerHTML;
    // Thêm selectedCouponConditions vào lớp 'CouponSelected_wrap'
    selectedCouponDiv.appendChild(selectedCouponConditions);
    selectedCouponDiv.appendChild(selectedCouponButton);
    var CouponListWrapper = document.querySelector(".CouponList_apply-wrapper");
    CouponListWrapper.appendChild(selectedCouponDiv);
  } else {
    VoucherCartButton.innerText = "Chọn";
    CouponCardID.classList.remove("VoucherDiscount_promotion_card-choose");
    couponConditionstitle.classList.remove("coupon-explain-choose");
    selectedCoupons.splice(existingCouponIndex, 1);

    var CouponListWrapper = document.querySelector(".CouponList_apply-wrapper");
    var selectedCouponDiv = CouponListWrapper.querySelector(
      '[data-coupon-id="' + couponId + '"]'
    );
    selectedCouponDiv.remove();
  }
  var selectedCouponCount = 0;
  selectedCouponCount++; // Cập nhật giá trị của selectedCouponCount
  // Cập nhật nút chọn mã
  var selectButton = document.querySelector(".NumberPromotional_applied");
  const VocherApplyBtnGroup = document.querySelector(".VocherApply_btn-group");
  const VoucherCardTitle = document.querySelector(
    ".CartSelector_Voucher-title"
  );
  const NumberPromotionalApplied = document.querySelector(
    ".NumberPromotional_applied"
  );
  if (selectedCoupons.length > 0) {
    VoucherCardTitle.innerText = "Mã khuyến mãi";
    NumberPromotionalApplied.innerHTML = "Đã áp dụng " + selectedCoupons.length;
    NumberPromotionalApplied.classList.add("NumberPromotional_applied_showw");
    VocherApplyBtnGroup.classList.add("VocherApply_btn-group-change");
    CouponListWrapper.classList.add("CouponList_apply-wrapper-showw");
  } else {
    VoucherCardTitle.innerText = "Ưu đãi & giảm giá";
    NumberPromotionalApplied.classList.remove(
      "NumberPromotional_applied_showw"
    );
    VocherApplyBtnGroup.classList.remove("VocherApply_btn-group-change");
    CouponListWrapper.classList.remove("CouponList_apply-wrapper-showw");
  }
  // Hiển thị số lượng mã đã chọn trên giao diện
  var numOfSelectedCoupons = document.getElementById("numOfSelectedCoupons");
  numOfSelectedCoupons.innerText = selectedCoupons.length;
}
function toggleTooltip(event, couponId) {
  event = event || window.event; // Thêm dòng này để xử lý sự kiện trên các trình duyệt cũ
  if (event.stopPropagation) {
    event.stopPropagation();
  } else {
    event.cancelBubble = true;
  }
  var tooltip = document.getElementById("tooltip-" + couponId);
  if (tooltip.style.display === "block") {
    tooltip.style.display = "none";
  } else {
    tooltip.style.display = "block";
  }
}

function closeTooltip() {
  var tooltips = document.getElementsByClassName("tooltip-content");
  for (var i = 0; i < tooltips.length; i++) {
    tooltips[i].style.display = "none";
  }
}
document.addEventListener("click", function (event) {
  event = event || window.event; // Thêm dòng này để xử lý sự kiện trên các trình duyệt cũ
  var target = event.target || event.srcElement; // Thêm dòng này để lấy target trên các trình duyệt cũ
  if (
    !target.closest(".coupon-explain") &&
    !target.closest(".tooltip-content")
  ) {
    closeTooltip();
  }
});
function copyCoupon(event, couponId) {
  event.stopPropagation();
  var tooltip = document.getElementById("tooltip-" + couponId);
  var couponCode = tooltip.querySelector(".coupon-code");
  var copyButton = tooltip.querySelector(".copy-button");
  var range = document.createRange();
  range.selectNode(couponCode);
  window.getSelection().removeAllRanges();
  window.getSelection().addRange(range);
  try {
    var successful = document.execCommand("copy");
    if (successful) {
      couponCode.classList.add("success");
    }
  } catch (err) {
    console.log("Sao chép thất bại:", err);
  }
  window.getSelection().removeAllRanges();
  setTimeout(function () {
    couponCode.classList.remove("success");
  }, 2000);
}

// Lấy danh sách các phần tử có class "PaymentMethod_pmt-item"
var paymentMethods = document.getElementsByClassName("PaymentMethod_pmt-item");

// Lặp qua từng phần tử và thêm sự kiện click vào
for (var i = 0; i < paymentMethods.length; i++) {
  paymentMethods[i].addEventListener("click", function () {
    // Xóa class "PaymentMethod_active__KaSrA" của tất cả các phần tử
    for (var j = 0; j < paymentMethods.length; j++) {
      paymentMethods[j].classList.remove("PaymentMethod_active__KaSrA");
    }

    // Thêm class "PaymentMethod_active__KaSrA" vào phần tử được chọn
    this.classList.add("PaymentMethod_active__KaSrA");
  });
}

const RequestVATInvoice = document.querySelector(
  ".RequestVAT_invoice-request-invoice"
);
const InputVATAdress = document.querySelector(".VAT_Adress-box input");
const VATAdressControl = document.querySelector(".VAT_Adress-control");
InputVATAdress.addEventListener("click", () => {
  if (InputVATAdress.checked) {
    RequestVATInvoice.classList.add("RequestVAT_invoice-request-invoice-show");
  } else {
    RequestVATInvoice.classList.remove(
      "RequestVAT_invoice-request-invoice-show"
    );
  }
});

// Lấy danh sách các phần tử có class "PaymentMethod_pmt-item"
var paymentMethods = document.getElementsByClassName("PaymentMethod_pmt-item");

// Lặp qua từng phần tử và thêm sự kiện click vào
for (var i = 0; i < paymentMethods.length; i++) {
  paymentMethods[i].addEventListener("click", function () {
    // Xóa class "PaymentMethod_active__KaSrA" của tất cả các phần tử
    for (var j = 0; j < paymentMethods.length; j++) {
      paymentMethods[j].classList.remove("PaymentMethod_active__KaSrA");
    }

    // Thêm class "PaymentMethod_active__KaSrA" vào phần tử được chọn
    this.classList.add("PaymentMethod_active__KaSrA");
  });
}
