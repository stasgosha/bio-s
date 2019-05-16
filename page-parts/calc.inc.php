<form class="calc-component" action="#">
	<div class="cmp-content">
		<div class="cmp-inner">
			<div class="cmp-steps-nav">
				<p class="info-line">Шаг <span>1</span> из 3</p>
				<ul class="progress-line">
					<li class="current" data-step="1"></li>
					<li data-step="2"></li>
					<li data-step="3"></li>
				</ul>
			</div>
			<div class="cmp-steps active-step-1">
				<div class="steps-track">
					<div class="step calc-step-1">
						<div class="tab-content">
							<h5 class="calc-caption bigger">Выберете место размещения оборудования</h5>
							<div class="step-1-form">
								<div class="radio-list">
									<div class="item">
										<div class="radio-box">
											<input type="checkbox" name="placement" value="in-house" id="in-house" checked>
											<label for="in-house">
												<div class="box-image">
													<img src="img/tmp/in-house.jpg" alt="">
												</div>
												<span class="box-name">В доме</span>
											</label>
										</div>
									</div>
									<div class="item">
										<div class="radio-box">
											<input type="checkbox" name="placement" value="in-kesson" id="in-kesson">
											<label for="in-kesson">
												<div class="box-image">
													<img src="img/tmp/in-kesson.jpg" alt="">
												</div>
												<span class="box-name">внутри кесона</span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-footer">
								<div class="ff-block"></div>
								<div class="ff-block">
									<button class="btn btn-bigger" data-step="2">Следующий щаг</button>
								</div>
								<div class="ff-block"></div>
							</div>
						</div>
					</div>
					<div class="step calc-step-2">
						<div class="tab-content">
							<div class="step-2-form">
								<div class="form-depth">
									<h5 class="calc-caption">Глубина скважины (м)</h5>
									<div class="depth-select-block">
										<div class="range-field vertical rotate-180">
											<input type="range" value="5" min="0" max="5" id="depth-range" jcf='{"orientation": "vertical", "range":"max"}'>
											<div class="range-legend">
												<div class="item selected" data-val="5">0</div>
												<div class="item" data-val="4">10</div>
												<div class="item" data-val="3">20</div>
												<div class="item" data-val="2">30</div>
												<div class="item" data-val="1">40</div>
												<div class="item" data-val="0">50</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-distance">
									<h5 class="calc-caption">Расстояние до дома (м)</h5>
									<div class="distance-select-block">
										<div class="range-field">
											<input type="range" value="0" min="0" max="3" id="distance-range">
											<div class="range-legend">
												<div class="item selected" data-val="0">0</div>
												<div class="item" data-val="1" style="left: 33.3333%">10</div>
												<div class="item" data-val="2" style="left: 66.6667%">20</div>
												<div class="item" data-val="3">30+</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-footer">
								<div class="ff-block">
									<a href="#" class="back-btn" data-step="1">
										<i class="icon-arrow-left"></i>
										<span>Предыдущий шаг</span>
									</a>
								</div>
								<div class="ff-block">
									<button class="btn btn-bigger" data-step="3">Следующий щаг</button>
								</div>
								<div class="ff-block">&nbsp;</div>
							</div>
						</div>
					</div>
					<div class="step calc-step-3">
						<div class="tab-content">
							<div class="step-3-form">
								<div class="kit-component">
									<div class="kit-products-line">
										<div class="kit-selected-product">
											<h5 class="calc-caption">Вам подходит:</h5>
											<div class="small-card with-border">
												<div class="card-image">
													<img src="img/tmp/product-small-image.png" alt="">
												</div>
												<div class="card-content">
													<p>Кессон 2</p>
													<div class="card-price">10 000 <span class="rouble">7</span></div>
												</div>
											</div>
										</div>
										<div class="kit-plus">+</div>
										<div class="kit-recommendations">
											<h5 class="calc-caption">Дополнительное оборудование</h5>
											<div class="recommendations-list">
												<div class="item">
													<input type="checkbox" name="kit-reccomended" value="1">
													<div class="small-card" data-kit-value="1">
														<div class="card-image">
															<img src="img/tmp/product-small.png" alt="">
														</div>
														<div class="card-content">
															<p>Насос</p>
															<div class="card-price">1 000 <span class="rouble">7</span></div>
														</div>
													</div>
												</div>
												<div class="item">
													<input type="checkbox" name="kit-reccomended" value="2">
													<div class="small-card" data-kit-value="2">
														<div class="card-image">
															<img src="img/tmp/product-small.png" alt="">
														</div>
														<div class="card-content">
															<p>Муфта</p>
															<div class="card-price">1 000 <span class="rouble">7</span></div>
														</div>
													</div>
												</div>
												<div class="item">
													<input type="checkbox" name="kit-reccomended" value="3">
													<div class="small-card" data-kit-value="3">
														<div class="card-image">
															<img src="img/tmp/product-small.png" alt="">
														</div>
														<div class="card-content">
															<p>Фильтр</p>
															<div class="card-price">1 000 <span class="rouble">7</span></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="kit-total-line">
										<span>Итого:</span>
									</div>
									<div class="kit-footer-line">
										<div class="footer-left">
											<p>
												<strong>Комплект поставки</strong>
												<br>Кессон, фильтр
											</p>
										</div>
										<div class="footer-center">
											<div class="checkbox">
												<input type="checkbox" id="product-1-montage">
												<label for="product-1-montage">Монтаж + <strong>1750 <span class="rouble">7</span></strong></label>
											</div>
										</div>
										<div class="footer-right">
											<div class="total-price">11 750 <span class="rouble">7</span></div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-footer">
								<div class="ff-block">
									<a href="#" class="back-btn" data-step="2">
										<i class="icon-arrow-left"></i>
										<span>Предыдущий шаг</span>
									</a>
								</div>
								<div class="ff-block">
									<button class="btn btn-bigger">Заказать звонок</button>
								</div>
								<div class="ff-block">
									<p class="note">Кессон можно купить в рассрочку, <br>Просто уточните детали у менеджера</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>