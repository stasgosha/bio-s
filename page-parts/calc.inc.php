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
			<div class="cmp-steps active-step-2">
				<div class="steps-track">
					<div class="step calc-step-1">
						<div class="tab-content">
							<h5 class="calc-caption bigger">Выберете место размещения оборудования</h5>
							<div class="step-1-form">
								<div class="radio-list">
									<div class="item">
										<div class="radio-box">
											<input type="radio" name="placement" value="in-house" id="in-house" checked>
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
											<input type="radio" name="placement" value="in-kesson" id="in-kesson">
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
											<input type="range" value="5" min="0" max="3" id="distance-range">
											<div class="range-legend">
												<div class="item selected" data-val="0">0</div>
												<div class="item" data-val="1">10</div>
												<div class="item" data-val="2">20</div>
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
							<h5 class="calc-caption bigger">Выберете место размещения оборудования</h5>
							<div class="step-1-form">
								<div class="radio-list">
									<div class="item">
										<div class="radio-box">
											<input type="radio" name="placement" value="in-house" id="in-house" checked>
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
											<input type="radio" name="placement" value="in-kesson" id="in-kesson">
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
									<button class="btn btn-bigger" id="to-step-2">Следующий щаг</button>
								</div>
								<div class="ff-block"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>