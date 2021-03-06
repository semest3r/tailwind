<div class="container min-h-screen bg-gray-100">
    <div class="mx-auto max-w-full">
        <div class="pb-8 grid grid-cols-10 ">
            <div class="col-start-1 row-start-1 py-5 px-5">
                <h2 class="text-4xl font-bold leading-tight ">
                    Kategori
                </h2>
            </div>
            <div class="col-start-1 row-start-2 grid grid-cols-5 col-span-10 justify-self-strecth ">
                <div class="col-start-1 p-3 mt-2">
                    <button type="button" data-modal-toggle="kategoriModal" class="px-4 py-2 text-base font-semibold rounded-md bg-purple-400 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200">Create</button>
                </div>
                <div class="col-start-5 justify-self-end p-3 mt-2">
                    <a href="#" class="px-4 py-2 text-base font-semibold rounded-md bg-purple-400 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200">download</a>
                </div>
            </div>
            <div class="row-start-3 col-span-10 px-10 pb-5 mt-5 border-t-2 bg-white shadow-lg">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr class="">
                            <th scope="col" class="px-5 py-5 text-base border-b-2 border-blue-500 text-gray-800 uppercase font-semibold">
                                No
                            </th>
                            <th scope="col" class="px-5 py-5 text-base border-b-2 border-blue-500 text-gray-800 uppercase font-semibold">
                                Nama
                            </th>
                            <th scope="col" class="px-5 py-5 text-base border-b-2 border-blue-500 text-gray-800 uppercase font-semibold">
                                Action
                            </th>
                    </thead>
                    <tbody>
                        <?php
                        $a = 1;
                        foreach ($kategori as $k) : ?>
                            <tr class="">
                                <td class="px-5 py-5 border-b border-gray-500  text-sm">
                                    <p class="text-gray-900 text-base whitespace-no-wrap ">
                                        <?= $a++ ?>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-500  text-sm">
                                    <p class="text-gray-900 text-base whitespace-no-wrap ">
                                        <?= $k['nama_kategori']; ?>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-500">
                                    <a href="<?= base_url('Produk/HapusKategori/') . $k['id']; ?>" class="flex justify-center text-base text-indigo-600 hover:text-indigo-900">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        <span>Delete</span>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Main modal -->
<div id="kategoriModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Kategori
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="kategoriModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form action="<?= base_url('Produk/createKategori') ?> " method="POST" enctype="multipart/form-data">
                <!-- Modal body -->
                <div class="p-6 space-y-6 w-11/12 mx-auto">
                    <div class=" relative text-left z-0 w-full mb-6 group">
                        <input type="text" name="nama_kategori" id="nama_kategori" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                        <label for="nama_kategori" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Kategori</label>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button data-modal-toggle="kategoriModal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                    <button data-modal-toggle="kategoriModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
            </form>
        </div>
    </div>
</div>