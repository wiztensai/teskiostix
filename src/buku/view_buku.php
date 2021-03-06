	<!--Navigation-->
	<?php include_once ("./src/templates/nav_buku.html");  ?>

	<!--Container-->
	<div class="container shadow-lg mx-auto bg-white mt-24 md:mt-16 h-screen">

	    <div class="max-w-screen-md mx-auto relative ">

            <button class="float-right my-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <a class='' href='?page=tambah_buku'>Tambah Buku</a>                
	        </button>

	        <table class="w-full border-collapse border-2 border-gray-500">
	            <thead>
	                <tr>
	                    <th class="border border-gray-400 px-4 py-2 text-gray-800">Judul</th>
	                    <th class="border border-gray-400 px-4 py-2 text-gray-800">Edit</th>
	                </tr>
	            </thead>
	            <tbody>
	                <?php
                    $response_data = fetch_decode($url_getbooks);
                    
                    $edit_link = "view_buku.php";
                    // print_r($response_data);

					foreach ($response_data as $data) {
						echo
						"<tr>
                            <td class='border px-4 py-2'>
                                <t class='font-semibold'>Judul:</t> $data->judul
                                <br/><t class='font-semibold'>Penulis:</t> $data->writer_name
                                <br/><t class='font-semibold'>Kategori:</t> $data->category 
                            </td>					
                            <td class='border px-4 py-2'>
                                <a class='float-right text-red-700' href='src/buku/proses_hapus_buku.php?id=$data->id'>Hapus</a>
								<a class='float-right pr-4 text-blue-600' href='?page=edit_buku&bukuid=$data->id'>Edit</a>								
							</td>
						</tr>".PHP_EOL;				
					}
					?>
	            </tbody>
	        </table>

	    </div>

	</div>