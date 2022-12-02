<div class="modal-container show fade">
	<div class="modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">FORM INSERT</h3>
					<button class="btn-close">
						<ion-icon name="close-outline"></ion-icon>
					</button>
				</div>
				<div class="modal-body">
					<div class="modal-content-body">
						<form class="form-insert" method="post" action="./process-insert.php">
							<div class="form-group">
								<label class="form-label">Tên:</label>
								<input class="form-input" placeholder="Tên Nhà Sản Xuất" type="text" name="name" autocomplete="off">
							</div>
							<div class="form-group">
								<label class="form-label">Địa chỉ:</label>
								<textarea class="form-input" placeholder="Địa Chỉ Nhà Sản Xuất" name="address" cols="40"
									rows="4"></textarea>
							</div>
							<div class="form-group">
								<label class="form-label">Số Điện Thoại:</label>
								<input class="form-input" placeholder="Số Điện Thoại Nhà Sản Xuất" type="tel" name="phone"
									autocomplete="off">
							</div>
							<div class="form-group">
								<label class="form-label">Link Ảnh:</label>
								<input class="form-input" placeholder="Link Ảnh Đại Diện Của Nhà Sản Xuất" type="text" name="image"
									autocomplete="off">
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-gray">
						Nhập Lại
					</button>
					<button type="button" class="btn btn-dark btn-submit" data-style="create">
						Thêm
					</button>
				</div>
			</div>
		</div>
	</div>
</div>