/*=================  Danh sách sản phẩm   ===========================*/
document.addEventListener("click", function (event) {
  var divs = document.getElementsByClassName("filter_group_item-content");
  for (var i = 0; i < divs.length; i++) {
    if (
      !event.target.closest(".filter-module-container") &&
      !event.target.closest(".filter_group_item-content")
    ) {
      divs[i].classList.remove("isShowing");
    }
  }
});
function toggleDiv(index) {
  var selectedDiv = document.getElementById("div" + index);
  var isVisible = selectedDiv.classList.contains("isShowing");

  var divs = document.getElementsByClassName("filter_group_item-content");
  for (var i = 0; i < divs.length; i++) {
    divs[i].classList.remove("isShowing");
  }

  if (!isVisible) {
    selectedDiv.classList.add("isShowing");
  }
}
function search(index) {
  var searchInput = document
    .getElementById(`searchInput${index}`)
    .value.toLowerCase();
  var checkboxes = document.querySelectorAll(
    `#div${index} input[type="checkbox"]`
  );
  var labels = document.querySelectorAll(`#div${index} label.checkbox-label`);

  checkboxes.forEach(function (checkbox, i) {
    var label = labels[i];

    if (label.innerText.toLowerCase().includes(searchInput)) {
      checkbox.style.display = "block";
      label.style.display = "flex";
    } else {
      checkbox.style.display = "none";
      label.style.display = "none";
    }
  });
}

// Lưu trữ các checkbox đã chọn
var selectedCheckboxes = {};
var tagCount = 0;
var deleteAll = document.getElementById("deleteAllButton");
// Lắng nghe sự kiện thay đổi trạng thái của checkbox
document.addEventListener("change", function (event) {
  var checkbox = event.target;
  var label = checkbox.parentElement;

  // Kiểm tra xem checkbox có được chọn hay không
  if (checkbox.checked) {
    // Lấy tên của label
    var labelName = label.innerText.trim();

    // Thêm tên vào selectedCheckboxes
    selectedCheckboxes[labelName] = true;

    // Tạo một thẻ 'p' và thêm vào 'collection-filter-list'
    var filterList = document.getElementById("filterList");
    var tagElement = document.createElement("p");
    tagElement.className = "ant-tag";
    var spanElement = document.createElement("span");
    spanElement.className = "tag-identifier";
    spanElement.innerText = labelName;
    tagElement.insertBefore(spanElement, tagElement.firstChild);

    // Thêm nút 'xóa'
    var deleteButton = document.createElement("button");
    deleteButton.innerText = "x";
    deleteButton.className = "delete-button";
    tagElement.appendChild(deleteButton);

    filterList.appendChild(tagElement);
  } else {
    var labelName = label.innerText.trim();
    delete selectedCheckboxes[labelName];

    var filterList = document.getElementById("filterList");
    var tags = filterList.getElementsByClassName("ant-tag");
    for (var i = 0; i < tags.length; i++) {
      var tag = tags[i];
      if (tag.querySelector(".tag-identifier").innerText === labelName) {
        tag.remove();
        break;
      }
    }
  }
  // Cập nhật số lượng thẻ 'ant-tag' hiển thị
  var VerticalSelected = document.querySelector(".Vertical-filter-selected");
  var tagIdentifiers = document.querySelectorAll(
    ".list-filter-selected .ant-tag .tag-identifier"
  );
  tagCount = tagIdentifiers.length;
  // Ẩn hiện thẻ 'text-text-secondary' và cập nhật nội dung
  var textTextSecondary = document.getElementById("text-text-secondary");
  if (tagCount > 0) {
    VerticalSelected.style.display = "block";
    textTextSecondary.style.display = "block";
    textTextSecondary.innerText = `Lọc theo: (${tagCount})`;
    deleteAll.style.display = "block";
  } else {
    textTextSecondary.style.display = "none";
    deleteAll.style.display = "none";
    VerticalSelected.style.display = "none";
  }
});

// Lắng nghe sự kiện click của nút 'Xóa'
document.addEventListener("click", function (event) {
  var target = event.target;

  // Kiểm tra xem phần tử được click có là nút 'Xóa' không
  if (target.classList.contains("delete-button")) {
    var tagElement = target.parentElement;
    var labelName = tagElement
      .querySelector(".tag-identifier")
      .innerText.trim();
    tagElement.remove();

    // Bỏ chọn checkbox tương ứng
    var checkboxes = document.querySelectorAll("label.checkbox-label");
    for (var i = 0; i < checkboxes.length; i++) {
      var checkbox = checkboxes[i].querySelector('input[type="checkbox"]');
      var label = checkboxes[i];
      if (label.innerText.trim() === labelName) {
        checkbox.checked = false;
        delete selectedCheckboxes[labelName];
        break;
      }
    }

    // Cập nhật số lượng thẻ 'ant-tag' hiển thị
    var tagIdentifiers = document.querySelectorAll(
      ".list-filter-selected .ant-tag .tag-identifier"
    );
    tagCount = tagIdentifiers.length;
    var VerticalSelected = document.querySelector(".Vertical-filter-selected");
    // Ẩn hiện thẻ 'text-text-secondary' và cập nhật nội dung
    var textTextSecondary = document.getElementById("text-text-secondary");
    if (tagCount > 0) {
      VerticalSelected.style.display = "block";
      textTextSecondary.style.display = "block";
      textTextSecondary.innerText = `Lọc theo: (${tagCount}) `;
      deleteAll.style.display = "block";
    } else {
      VerticalSelected.style.display = "none";
      textTextSecondary.style.display = "none";
      deleteAll.style.display = "none";
    }
  }
});
// Xóa tất cả các thẻ 'ant-tag' và bỏ chọn tất cả checkbox
function deleteAllTags() {
  var filterList = document.getElementById("filterList");
  var tags = filterList.getElementsByClassName("ant-tag");
  var deleteAll = document.getElementById("deleteAllButton");
  var checkboxes = document.querySelectorAll(
    'label.checkbox-label input[type="checkbox"]'
  );
  for (var i = 0; i < checkboxes.length; i++) {
    checkboxes[i].checked = false;
  }
  while (tags.length > 0) {
    tags[0].remove();
  }
  // Cập nhật số lượng thẻ 'ant-tag' hiển thị và ẩn hiện thẻ 'text-text-secondary'
  var tagCount = 0;
  var tagIdentifiers = document.querySelectorAll(
    ".list-filter-selected .ant-tag .tag-identifier"
  );
  tagCount = tagIdentifiers.length;
  var textTextSecondary = document.getElementById("text-text-secondary");
  var VerticalSelected = document.querySelector(".Vertical-filter-selected");
  if (tagCount > 0) {
    VerticalSelected.style.display = "block";
    textTextSecondary.style.display = "block";
    textTextSecondary.innerText = `Lọc theo: (${tagCount}) `;
    deleteAll.style.display = "block";
  } else {
    VerticalSelected.style.display = "none";
    textTextSecondary.style.display = "none";
    deleteAll.style.display = "none";
  }
}

/*================= hết Danh sách sản phẩm   ===========================*/
// Get all tab titles and content sections
const tabTitles = document.querySelectorAll(".ProductTab_tab-name");
const contentSections = document.querySelectorAll(
  ".CompactContent_description-text"
);

// Add click event listener to each tab title
tabTitles.forEach((tabTitle, index) => {
  tabTitle.addEventListener("click", () => {
    // Scroll to the corresponding content section
    contentSections[index].scrollIntoView({ behavior: "smooth" });
  });
});

// Lấy phần tử nút "Xem thêm" và phần tử chứa nội dung
var CompactContentButton = document.querySelector(
  ".CompactContent_toggle-button button"
);
var CompactContentTextP = document.querySelector(
  ".CompactContent_toggle-button p"
);
var CompactContentContainer = document.querySelector(
  ".CompactContent_container"
);
var RelatedProductRelated = document.querySelector(
  ".RelatedProduct_product-related"
);

// Thêm bộ lắng nghe sự kiện khi bấm vào nút "Xem thêm"
// CompactContentButton.addEventListener("click", function () {
//   // Kiểm tra trạng thái hiện tại của phần tử chứa nội dung
//   var isExpanded = CompactContentContainer.classList.contains(
//     "CompactContent_container-active"
//   );

//   // Nếu đang được thu gọn, mở rộng và đổi tên nút thành "Thu gọn"
//   if (!isExpanded) {
//     CompactContentContainer.classList.add("CompactContent_container-active");
//     RelatedProductRelated.classList.add(
//       "RelatedProduct_product-related-active"
//     );
//     CompactContentTextP.classList.add("CompactContent_p");
//     CompactContentButton.textContent = "Thu gọn";
//   }
//   // Ngược lại, thu gọn và đổi tên nút thành "Xem thêm"
//   else {
//     CompactContentContainer.classList.remove("CompactContent_container-active");
//     RelatedProductRelated.classList.remove(
//       "RelatedProduct_product-related-active"
//     );
//     CompactContentTextP.classList.remove("CompactContent_p");
//     CompactContentButton.textContent = "Xem thêm";
//   }
// });

//===========================  Nút Viên hay hộp   ===========================//
const ProductMeasurementButtons = document.querySelectorAll(
  ".ProductMeasurement_button"
);

for (let i = 0; i < ProductMeasurementButtons.length; i++) {
  ProductMeasurementButtons[i].addEventListener("click", function () {
    const selectedId = ProductMeasurementButtons[i].id;

    // Xóa lớp ProductMeasurement_button-choose ra khỏi tất cả các nút
    for (let j = 0; j < ProductMeasurementButtons.length; j++) {
      ProductMeasurementButtons[j].classList.remove(
        "ProductMeasurement_button-choose"
      );
    }

    // Thêm lớp ProductMeasurement_button-choose vào nút được nhấp vào
    ProductMeasurementButtons[i].classList.add(
      "ProductMeasurement_button-choose"
    );

    // Cập nhật localStorage với selectedId
    localStorage.setItem("Đơn vị tính", selectedId);
  });
}

//=======================   Tìm nội dung bình luận   ===================================//
// document.getElementById("find-cmt").addEventListener("keyup", function (event) {
//   if (event.keyCode === 13) {
//     event.preventDefault();

//     var input = document.getElementById("find-cmt").value;

//     var pTag = document.createElement("p");
//     pTag.setAttribute("class", "CommentTag_item");

//     var textNode = document.createTextNode(input);
//     pTag.appendChild(textNode);

//     var CmtTagDeletBtns = document.createElement("span");
//     CmtTagDeletBtns.className = "CommentTag_delet-btn";
//     CmtTagDeletBtns.innerHTML = "x";
//     CmtTagDeletBtns.addEventListener("click", function () {
//       pTag.parentNode.removeChild(pTag);
//       updateInfoCount();
//     });
//     pTag.appendChild(CmtTagDeletBtns);

//     var CommentInfoTagList = document.querySelector(
//       ".CommentInfo_tag-box-list"
//     );
//     CommentInfoTagList.appendChild(pTag);

//     updateInfoCount();

//     document.getElementById("find-cmt").value = "";
//   }
// });

// function updateInfoCount() {
//   var CommentInfoCount = document.querySelector(".CommentInfo_count-txt");
//   var CommentTagItem = document.querySelectorAll(".CommentTag_item");
//   var infoCount = CommentTagItem.length;

//   if (CommentInfoCount) {
//     CommentInfoCount.innerHTML = "Lọc theo (" + infoCount + ")";
//   }

//   var ProductCmtFilterBox = document.querySelector(
//     ".ProductComment_filter-box"
//   );

//   if (infoCount === 0) {
//     ProductCmtFilterBox.classList.remove("ProductComment_filter-box-showw");
//   } else {
//     ProductCmtFilterBox.classList.add("ProductComment_filter-box-showw");
//   }
// }

//=========================   MODAL hình ảnh thông tin đơn thuốc   ======================================//

const CarouselGalleryText = document.querySelector(".CarouselGallery-text");
const ProductCarouselModal = document.querySelector(
  ".ProductThumbnailCarousel_Modal"
);
const ProductCarouselWrapper = document.querySelector(".ProductCarousel_wrap");
const ProductCarouselClose = document.querySelector(
  ".ProductCarousel_btn-close"
);
CarouselGalleryText.addEventListener("click", function () {
  ProductCarouselModal.classList.add(
    "ProductThumbnailCarousel_OverlayAfter-open"
  );
});
ProductCarouselWrapper.addEventListener("click", function () {
  ProductCarouselModal.classList.add(
    "ProductThumbnailCarousel_OverlayAfter-open"
  );
});
ProductCarouselClose.addEventListener("click", function () {
  ProductCarouselModal.classList.remove(
    "ProductThumbnailCarousel_OverlayAfter-open"
  );
});
var swiper = new Swiper(".slider-frame.ProductCarousel_list-img-tab", {
  slidesPerView: 4,
  spaceBetween: 16,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".slider-frame.ProductCarousel_wrap", {
  spaceBetween: 10,
  thumbs: {
    swiper: swiper,
  },
});

var sliderThumbnail = new Swiper(
  ".slider-frame.ProductThumbnailCarousel_list-tab",
  {
    spaceBetween: 16,
    slidesPerView: 8,
    loop: true,
    freeMode: true,
    watchSlidesProgress: true,
  }
);

var slider = new Swiper(
  ".slider-frame.ProductThumbnailCarousel_product-content",
  {
    spaceBetween: 16,
    loop: true,
    navigation: {
      nextEl: ".button__view-gallery-next",
      prevEl: ".button__view-gallery-prev",
    },
    thumbs: {
      swiper: sliderThumbnail,
    },
  }
);
document.querySelector(".zoom-btn-plus").addEventListener("click", function () {
  var sliderContainer = document.querySelector(
    ".ProductThumbnailCarousel_product-content"
  );
  var lgSubHtml = document.querySelector(".lg-sub-html");
  lgSubHtml.style.display = "none";
  document.querySelector(".zoom-btn-plus").style.display = "none";
  document.querySelector(".zoom-btn-minus").style.display = "block";
  document.querySelector(
    ".swiper.ProductThumbnailCarousel_list-tab"
  ).style.display = "none";
  if (!sliderContainer.classList.contains("zoomed-in")) {
    sliderContainer.classList.add("zoomed-in");
  }
});

document
  .querySelector(".zoom-btn-minus")
  .addEventListener("click", function () {
    var sliderContainer = document.querySelector(
      ".ProductThumbnailCarousel_product-content"
    );
    var lgSubHtml = document.querySelector(".lg-sub-html");
    lgSubHtml.style.display = "block";
    document.querySelector(".zoom-btn-plus").style.display = "block";
    document.querySelector(".zoom-btn-minus").style.display = "none";
    document.querySelector(
      ".swiper.ProductThumbnailCarousel_list-tab"
    ).style.display = "block";
    if (sliderContainer.classList.contains("zoomed-in")) {
      sliderContainer.classList.remove("zoomed-in");
    }
  });
document
  .querySelector(".ProductCarousel_wrap")
  .addEventListener("click", function (event) {
    var clickedItem = event.target.closest(".ProductCarousel_product-img");
    if (clickedItem) {
      var index = clickedItem.getAttribute("data-index");
      displayModalImage(index);
    }
  });

function displayModalImage(index) {
  var sliderContainer = document.querySelector(
    ".ProductThumbnailCarousel_product-content"
  );
  var thumbnailContainer = document.querySelector(
    ".ProductThumbnailCarousel_list-tab"
  );

  // Chuyển đến hình ảnh tương ứng trong carousel "ProductThumbnailCarousel_product-content"
  slider.slideTo(index);

  // Chuyển đến hình ảnh tương ứng trong carousel "ProductThumbnailCarousel_list-tab"
  sliderThumbnail.slideTo(index);

  // Cập nhật modal (slidearea-modal) với thông tin của hình ảnh
  // Tùy chỉnh theo yêu cầu của bạn

  // Lấy thông tin hình ảnh từ carousel "ProductThumbnailCarousel_wrap"
  var imageSrc = document
    .querySelector(
      ".ProductCarousel_wrap .ProductCarousel_product-img[data-index='" +
        index +
        "'] img"
    )
    .getAttribute("src");

  // Hiển thị thông tin hình ảnh trong modal
  var modalImage = document.querySelector(
    ".ProductThumbnailCarousel_Modal .content-t__list__item__img-container img"
  );
  modalImage.src = imageSrc;
}

/*=======================        Giỏ hàng + Thanh toán       =======================*/

// /*----------Tính tiền đơn hàng + tăng giảm số lượng sản phẩm-----------*/

// // Tính tổng chiết khấu và tổng thành tiền
// function calculateDiscount() {
//   var totalDiscount = 0;
//   var totalAmount = 0;
//   var productRows = document.querySelectorAll(".cart-selector_c-product");
//   productRows.forEach(function (row) {
//     var oldPrice = parseFloat(
//       row
//         .querySelector(".cart-selector_g-col-2 .cart-selector_old")
//         .textContent.replace(/\D/g, "")
//     );
//     var newPrice = parseFloat(
//       row
//         .querySelector(".cart-selector_g-col-2 .cart-selector_new")
//         .textContent.replace(/\D/g, "")
//     );
//     var quantity = parseInt(
//       row.querySelector('.cart-selector_g-col-3 input[name="qty"]').value
//     );
//     var discount = (oldPrice - newPrice) * quantity;
//     totalDiscount += discount;
//     var price = parseFloat(
//       row
//         .querySelector(".cart-selector_g-col-4 .cart-total-price-col")
//         .textContent.replace(/\D/g, "")
//     );
//     totalAmount += price;
//   });

//   // Cập nhật giá trị tổng chiết khấu
//   var discountElement = document.getElementById("Direct-discount");
//   discountElement.textContent =
//     totalDiscount.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".") + "đ";
//   // Hiển thị tổng thành tiền trong phần tử có id "total"
//   var totalElement = document.getElementById("total");
//   totalElement.textContent =
//     totalAmount.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".") + "đ";
// }
// // Gọi hàm tính tổng chiết khấu và tổng thành tiền khi trang tải hoàn tất
// document.addEventListener("DOMContentLoaded", function () {
//   calculateDiscount();
// });

// 
// function calculateTotalPrice(quantityInput) {
//   var priceCol = quantityInput
//     .closest(".cart-selector_row")
//     .querySelector(".cart-selector_g-col-2 .cart-selector_new");
//   var price = parseFloat(priceCol.textContent.replace(/\D/g, ""));
//   var quantity = parseInt(quantityInput.value);
//   var totalPrice = price * quantity;
//   var totalPriceCol = quantityInput
//     .closest(".cart-selector_row")
//     .querySelector(".cart-selector_g-col-4 .cart-total-price-col");
//   totalPriceCol.textContent =
//     totalPrice.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".") + "đ";
//   // Hàm tính toán tổng thành tiền
//   document.addEventListener("DOMContentLoaded", function () {
//     calculateTotalPrice();
//   });
//   // Tính tổng thành tiền
//   function calculateTotalPrice() {
//     // Thiết lập giá trị ban đầu của tổng thành tiền
//     var total = 0;

//     // Lặp qua từng phần tử có class "CartItem_total-price-col"
//     const totalPriceElements = document.getElementsByClassName(
//       "cart-total-price-col"
//     );
//     for (let i = 0; i < totalPriceElements.length; i++) {
//       const price = parseInt(
//         totalPriceElements[i].textContent.replace(/\D/g, "")
//       );
//       total += price;
//     }

//     // Hiển thị tổng thành tiền trong phần tử có id "total"
//     document.getElementById("total").textContent =
//       total.toLocaleString("en-US") + " đ";
//   }

//   // Gọi hàm tính toán tổng thành tiền ngay khi trang web được tải lên
//   calculateTotalPrice();
// }

// // Lắng nghe sự kiện khi số lượng sản phẩm thay đổi
// var totalElement = document.getElementById("total");
// var discountElement = document.getElementById("Direct-discount");
// var vocherDiscountElement = document.getElementById("vocher-discount");

// // Tính toán và cập nhật lại số tiền tạm tính khi giá trị "total" và "Direct-discount" thay đổi
// function updateProvisionalAmount() {
//   var total = parseFloat(totalElement.textContent.replace(/\D/g, ""));
//   var vocherDiscount = parseFloat(
//     vocherDiscountElement.textContent.replace(/\D/g, "")
//   );
//   var provisionalAmount = total - vocherDiscount;

//   // Cập nhật giá trị trong phần tử "provisional-amount"
//   var provisionalAmountElement = document.getElementById("provisional-amount");
//   provisionalAmountElement.textContent =
//     provisionalAmount.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".") + "đ";

//   // Kiểm tra điều kiện và cập nhật trạng thái
//   var cartTotalPriceText = document.querySelector(".cart-total-price-col-text");
//   var giftsIncluded = document.querySelector(".Gifts-included-with-product");

//   if (provisionalAmount <= 500000) {
//     cartTotalPriceText.innerHTML =
//       '<div class="not-eligible-to-apply-promotion"><i class="iconcmt-unqualified"></i></div>';
//     giftsIncluded.classList.remove("eligible-promotion");
//   } else {
//     cartTotalPriceText.innerHTML =
//       '<div class="eligible-to-apply-promotion"><p>Miễn phí</p></div>';
//     giftsIncluded.classList.add("eligible-promotion");
//   }
// }

// // Lắng nghe sự kiện khi giá trị "total" thay đổi
// totalElement.addEventListener("DOMSubtreeModified", function () {
//   updateProvisionalAmount();
// });

// // Lắng nghe sự kiện khi giá trị "Direct-discount" thay đổi
// discountElement.addEventListener("DOMSubtreeModified", function () {
//   updateProvisionalAmount();
// });

// // Gọi hàm để tính toán và cập nhật số tiền tạm tính ban đầu
// updateProvisionalAmount();

// // Tính toán và cập nhật lại số tiền tạm tính khi giá trị "total" và "savings-amount" thay đổi

// var savingsAmountElement = document.getElementById("savings-amount");
// var directDiscountElement = document.getElementById("Direct-discount");
// var vocherDiscountElement = document.getElementById("vocher-discount");

// // Lắng nghe sự thay đổi của giá trị "Direct-discount" và "vocher-discount"
// directDiscountElement.addEventListener(
//   "DOMSubtreeModified",
//   updateSavingsAmount
// );
// vocherDiscountElement.addEventListener(
//   "DOMSubtreeModified",
//   updateSavingsAmount
// );

// // Hàm để tính toán và cập nhật lại giá trị của "savings-amount"
// function updateSavingsAmount() {
//   var directDiscount = parseFloat(
//     directDiscountElement.textContent.replace(/\D/g, "")
//   );
//   var vocherDiscount = parseFloat(
//     vocherDiscountElement.textContent.replace(/\D/g, "")
//   );
//   var savingsAmount = directDiscount + vocherDiscount;

//   // Cập nhật giá trị của "savings-amount"
//   savingsAmountElement.textContent =
//     savingsAmount.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".") + "đ";
// }

// // Gọi hàm để tính toán và cập nhật giá trị ban đầu của "savings-amount"
// updateSavingsAmount();
// // Lắng nghe sự kiện khi nhấp vào nút xóa sản phẩm
// var deleteButtons = document.querySelectorAll(".cart-pre-order-product_delet");
// deleteButtons.forEach(function (button) {
//   button.addEventListener("click", function () {
//     deleteProduct(this);
//   });
// });

// // Xóa sản phẩm
// function deleteProduct(button) {
//   var productRow = button.closest(".cart-selector_c-product");
//   productRow.remove();
//   calculateDiscount();
// }

// // Get the checkbox element
// const checkbox = document.querySelector(".cart-selector_ui-radio-input");
// // Get the "Gifts-included-with-product" element
// const DiscountProductElement = document.querySelector(".Discount-by-product");
// // Add event listener to checkbox state change
// checkbox.addEventListener("change", function () {
//   if (this.checked) {
//     // Add the "Gifts-checked" class to the "Discount-by-product" element
//     DiscountProductElement.classList.add("Discount-product-checked");
//   } else {
//     // Remove the "Gifts-checked" class from the "Discount-by-product" element
//     DiscountProductElement.classList.remove("Discount-product-checked");
//   }
// });
// window.addEventListener("DOMContentLoaded", function () {
//   const DiscountProductElement = document.querySelector(".Discount-by-product");
//   DiscountProductElement.classList.add("Discount-product-checked");
// });


