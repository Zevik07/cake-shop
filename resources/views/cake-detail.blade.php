<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Cupcake
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-2 gap-x-3">
                    <div class="w-full h-auto p-4">
                        <!-- <div id="mainImg" class="w-96 h-96 mb-3 mx-auto rounded-lg"></div> -->

                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="w-96 h-96 mb-3 mx-auto rounded-lg object-fill" src="http://4.bp.blogspot.com/-sbpJrKlHCXA/VOmV6vxWpXI/AAAAAAAAAQY/7jPzIfW5HA0/s1600/4.jpg" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4 class="text-semibold text-white">Cupcake Strawberry</h4>
                                        
                                    </div>
                                </div>  
                                <div class="carousel-item">
                                    <img class="w-96 h-96 mb-3 mx-auto rounded-lg object-fill" src="http://image.optcdn.me/744b17cdad41f1bf8042ca091bef4316-moist-chocolate-cupcakes-5.jpg" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4 class="text-semibold text-white">Cupcake Chocolate</h4>
                                       
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="w-96 h-96 mb-3 mx-auto rounded-lg object-fill" src="https://cdn.tgdd.vn/2021/07/CookRecipe/GalleryStep/thanh-pham-1049.jpg" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4 class="text-semibold text-white">Cupcake Matcha</h4>
                                       
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="w-96 h-96 mb-3 mx-auto rounded-lg object-fill" src="https://www.cookingclassy.com/wp-content/uploads/2014/01/cherry-almond-cupcakes-edit+srgb+text..jpg" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4 class="text-semibold text-white">Cupcake Cherry</h4>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                       <!--Other Image-->
                        <div class="w-full h-32 grid grid-cols-4 gap-x-1">
                            <img class="sub-img w-full h-full mb-3 mx-auto overflow-auto rounded-lg object-cover border-2" src="http://4.bp.blogspot.com/-sbpJrKlHCXA/VOmV6vxWpXI/AAAAAAAAAQY/7jPzIfW5HA0/s1600/4.jpg" alt="">
                            <img class="sub-img w-full h-full mb-3 mx-auto overflow-auto rounded-lg object-cover border-2" src="http://image.optcdn.me/744b17cdad41f1bf8042ca091bef4316-moist-chocolate-cupcakes-5.jpg" alt="">
                            <img class="sub-img w-full h-full mb-3 mx-auto overflow-auto rounded-lg object-cover border-2" src="https://cdn.tgdd.vn/2021/07/CookRecipe/GalleryStep/thanh-pham-1049.jpg" alt="">
                            <img class="sub-img w-full h-full mb-3 mx-auto overflow-auto rounded-lg object-cover border-2" src="https://www.cookingclassy.com/wp-content/uploads/2014/01/cherry-almond-cupcakes-edit+srgb+text..jpg" alt="">
                        </div>
                        <!--Other Imange end-->
                    </div>
                    <div class="w-full h-auto p-4">
                        <h4 class="font-semibold text-3xl text-black py-6">Bánh Cupcake</h4>
                        <span class="block font-normal text-xl text-red-400">35.000Đ</span>
                        <span class="block py-6 mr-4 font-light text-base text-gray-400">Cupcake đã được 200 tuổi rồi đó. 
                            Cupcake xuất hiện đầu tiên tại Mỹ vào thế kỷ 19 
                            và nhanh chóng tạo thành một bước đột phá và phổ biến trong các gian bếp. 
                            Theo trang Food Timeline, người ta vẫn chưa tìm ra nguồn gốc thật sự của tên gọi cupcake. 
                            Họ có 2 lý giải cho tên gọi như sau: 
                            1 là chiếc bánh truyền thông được nướng trong những chiếc cup nhỏ, 
                            2 là những thành phần nguyên liệu của bánh được đong theo cup.</span>
                            <p>Chọn vị:</p>
                        <div class="flex flex-wrap">
                            <button class="inline-lock px-6 py-1 m-1 text-gray-700 focus:bg-gray-300 rounded-lg border-2" >
                                Dâu
                            </button>
                            <button class="inline-lock px-6 py-1 m-1 text-gray-700 focus:bg-gray-300 rounded-lg border-2" >
                                Chocolate
                            </button>
                            <button class="inline-lock px-6 py-1 m-1 text-gray-700 focus:bg-gray-300 rounded-lg border-2" >
                                Trà xanh
                            </button>
                            <button class="inline-lock px-6 py-1 m-1 text-gray-700 focus:bg-gray-300 rounded-lg border-2" >
                                Cherry
                            </button>
                        </div>
                        <span>Số lượng</span>
                        <input class="w-20 h-10 mx-3 rounded-lg" type="number" min="0">
                        <button class="block px-6 py-3 m-3 text-white bg-red-400 hover:bg-red-500 rounded-lg transition-colors">Thêm vào giỏ hàng</button>
                        <hr>
                        <span class="block pt-4 font-light text-sm text-gray-400">Shop đảm bảo giao hàng không quá 24 giờ, miễn phí trả hàng nếu không đúng yêu cầu</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
