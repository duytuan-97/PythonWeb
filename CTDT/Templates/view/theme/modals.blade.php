<!--begin::Engage modals-->
		<!--begin::Modal - Sitemap-->
		<div class="modal fade bg-dark bg-opacity-75" id="kt_app_engage_prebuilts_modal" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-fullscreen p-5 p-lg-10" id="kt_engage_prebuilts_modal_dialog">
				<!--begin::Modal content-->
				<div class="modal-content rounded-4">
					<!--begin::Modal header-->
					<div class="modal-header flex-stack border-0 px-10 pt-5 pb-0" id="kt_engage_prebuilts_header">
						<!--begin::View menu-->
						<div id="kt_app_engage_prebuilts_view_menu" class="position-relative z-index-1">
							<!--begin::Toggle-->
							<button type="button" data-kt-element="selected" class="btn btn-flex px-0 rotate-" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, -1px">
								<!--begin::Title-->
								<span class="fs-6 fw-bold text-gray-600 me-2" data-kt-element="title">Image View</span>
								<!--end::Title-->
								<!--begin::Arrow-->
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
								<span class="svg-icon svg-icon-4 svg-icon-gray-600 rotate-180-">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Arrow-->
							</button>
							<!--end::Toggle-->
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-active-bg menu-state-primary menu-gray-600 menu-rounded w-150px py-3 px-3" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item">
									<!--begin::Menu link-->
									<a href="#" class="menu-link px-4 py-2 active" data-kt-mode="image">Image View</a>
									<!--end::Menu link-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item">
									<!--begin::Menu link-->
									<a href="#" class="menu-link px-4 py-2" data-kt-mode="text">Text View</a>
									<!--end::Menu link-->
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::View menu-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary me-n2 position-relative z-index-1" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/general/gen034.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
									<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
									<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body pt-0 pb-5 px-15 mt-n5" id="kt_app_engage_prebuilts_body">
						<div class="container-fluid">
							<style>.app-prebuilts-thumbnail { border: 1px solid var(--kt-body-bg); filter: drop-shadow(0px 0px 50px rgba(49, 52, 122, 0.12)); }</style>
							<!--begin::Image view-->
							<div class="d-block" id="kt_app_engage_prebuilts_view_image">
								<!--begin::Tabs wrapper-->
								<div class="d-flex flex-center" id="kt_app_engage_prebuilts_view_image_tabs">
									<!--begin::Tabs-->
									<ul class="nav nav-tabs border-0 mb-5">
										<!--begin::Tab item-->
										<li class="nav-item px-2">
											<!--begin::Tab link-->
											<a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_demos">Layouts</a>
											<!--end::Tab link-->
										</li>
										<!--end::Tab item-->
										<!--begin::Tab item-->
										<li class="nav-item px-2">
											<!--begin::Tab link-->
											<a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold active" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_dashboards">Dashboards</a>
											<!--end::Tab link-->
										</li>
										<!--end::Tab item-->
										<!--begin::Tab item-->
										<li class="nav-item px-2">
											<!--begin::Tab link-->
											<a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages">Pages</a>
											<!--end::Tab link-->
										</li>
										<!--end::Tab item-->
										<!--begin::Tab item-->
										<li class="nav-item px-2">
											<!--begin::Tab link-->
											<a class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_apps">Apps</a>
											<!--end::Tab link-->
										</li>
										<!--end::Tab item-->
									</ul>
									<!--end::Tabs-->
								</div>
								<!--end::Tabs wrapper-->
								<!--begin::Tab content-->
								<div class="tab-content">
									<div class="pt-5 tab-pane fade" id="kt_app_engage_prebuilts_tab_demos" role="tabpanel">
										<!--begin::Scroll wrapper-->
										<div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" data-kt-scroll-offset="215px">
											<!--begin::Row-->
											<div class="row gy-10">
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo1/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Metronic Original</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo1.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo2/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">SaaS App</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo2.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo30/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Sales Tracking App</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo30.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo3/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">New Trend</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo3.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo31/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Marketing Automation</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo31.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo27/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Databox Dashboard</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo27.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo6/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Time Reporting</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo6.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo35/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Traffic Analytics</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo35.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo33/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Social Campaings</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo33.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo32/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Delivery Management</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo32.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo10/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Project Grid</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo10.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo36/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Digital Marketing</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo36.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo39/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Billing SaaS</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo39.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo38/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Email Marketing</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo38.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo40/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">HR App</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo40.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo23/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Member Dashboard</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo23.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo25/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">User Guiding App</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo25.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo20/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">CRM Software</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo20.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo7/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">CRM Dashboard</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo7.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo11/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Finance Planner</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo11.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo4/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Jobs Site</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo4.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo42/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Calendar Workspace</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo42.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo48/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Cloud ERP</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo48.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo43/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Healthcare Dashboard</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo43.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo49/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">KPI Tracking</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo49.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo44/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Recruit Automation</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo44.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo37/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Cloud Suite</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo37.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo18/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Goal Tracking</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo18.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo26/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Planable App</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo26.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo24/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Helpdesk App</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo24.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo22/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Media Publisher</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo22.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo19/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Reports Panel</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo19.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo28/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">eCommerce App</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo28.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo29/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Project Workspace</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo29.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo8/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Analytics App</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo8.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo17/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Events Scheduler</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo17.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo41/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Business Intelligence</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo41.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo12/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Data Analyzer</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo12.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo21/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Monochrome App</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo21.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo34/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Finance Analytics</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo34.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo15/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Crypto Planner</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo15.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo14/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Project Workplace</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo14.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo9/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Sales Manager</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo9.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo5/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Support Forum</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo5.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo13/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Classic Dashboard</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo13.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="https://preview.keenthemes.com/metronic8/demo16/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Podcast App</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/demos/demo16.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Scroll wrapper-->
									</div>
									<div class="pt-5 tab-pane fade show active" id="kt_app_engage_prebuilts_tab_dashboards" role="tabpanel">
										<!--begin::Scroll wrapper-->
										<div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" data-kt-scroll-offset="215px">
											<!--begin::Row-->
											<div class="row gy-10">
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/index.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Multipurpose</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/multipurpose-demo1.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/marketing.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Marketing</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/marketing.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/social.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Social</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/social.pn') }}g" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/ecommerce.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Ecommerce</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/ecommerce.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/store-analytics.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Store-analytics</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/store-analytics.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/logistics.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Logistics</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/logistics.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/delivery.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Delivery</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/delivery.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/online-courses.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Online-courses</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/online-courses.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/school.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">School</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/school.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/crypto.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Crypto</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/crypto.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/finance-performance.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Finance-performance</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/finance-performance.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/website-analytics.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Website-analytics</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/website-analytics.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/bidding.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Bidding</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/bidding.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/podcast.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Podcast</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/podcast.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/projects.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Projects</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/projects.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/call-center.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Call-center</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/call-center.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/dashboards/pos.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">POS</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/dashboards/pos.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Scroll wrapper-->
									</div>
									<div class="pt-5 tab-pane fade" id="kt_app_engage_prebuilts_tab_apps" role="tabpanel">
										<!--begin::Scroll wrapper-->
										<div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" data-kt-scroll-offset="215px">
											<!--begin::Row-->
											<div class="row gy-10">
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/apps/projects/list/list.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Projects</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/apps/projects.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/apps/ecommerce/catalog/products/products.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Ecommerce</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/apps/ecommerce.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/apps/customers/list/list.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Customers</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/apps/customers.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/apps/subscriptions/list/list.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Subscriptions</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/apps/subscriptions.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/apps/user-management/users/list/list.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">User Management</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/apps/user-management.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/apps/invoices/create/main.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Invoices</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/apps/invoices.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/apps/support-center/overview/main.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Support Center</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/apps/support-center.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/apps/chat/private.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Chat</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/apps/chat.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/apps/calendar/calendar.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Calendar</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/apps/calendar.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/apps/file-manager/list/folders.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">File Manager</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/apps/file-manager.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/apps/inbox/listing/listing.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Inbox</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/apps/inbox.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Preview-->
													<a href="../../demo1/dist/apps/contacts/getting-started.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
														<!--begin::Title-->
														<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Contacts</h3>
														<!--end::Title-->
														<!--begin::Thumbnail-->
														<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
															<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/apps/contacts.png') }}" class="lozad w-100 rounded" />
														</span>
														<!--end::Thumbnail-->
													</a>
													<!--end::Preview-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Scroll wrapper-->
									</div>
									<div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages">
										<!--begin::Tabs wrapper-->
										<div class="d-flex flex-center mb-5">
											<div class="border-bottom">
												<!--begin::Tabs-->
												<ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-6 fw-bold m-0 p-0 gap-4">
													<!--begin::Tab item-->
													<li class="nav-item p-0 m-0">
														<!--begin::Tab link-->
														<a class="nav-link text-muted text-active-primary pt-0 pb-4 active" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_authentication">Authentication</a>
														<!--end::Tab link-->
													</li>
													<!--end::Tab item-->
													<!--begin::Tab item-->
													<li class="nav-item p-0 m-0">
														<!--begin::Tab link-->
														<a class="nav-link text-muted text-active-primary pt-0 pb-4" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_general">General</a>
														<!--end::Tab link-->
													</li>
													<!--end::Tab item-->
													<!--begin::Tab item-->
													<li class="nav-item p-0 m-0">
														<!--begin::Tab link-->
														<a class="nav-link text-muted text-active-primary pt-0 pb-4" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_account">Account</a>
														<!--end::Tab link-->
													</li>
													<!--end::Tab item-->
													<!--begin::Tab item-->
													<li class="nav-item p-0 m-0">
														<!--begin::Tab link-->
														<a class="nav-link text-muted text-active-primary pt-0 pb-4" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_modals">Modals</a>
														<!--end::Tab link-->
													</li>
													<!--end::Tab item-->
													<!--begin::Tab item-->
													<li class="nav-item p-0 m-0">
														<!--begin::Tab link-->
														<a class="nav-link text-muted text-active-primary pt-0 pb-4" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_wizards">Wizards</a>
														<!--end::Tab link-->
													</li>
													<!--end::Tab item-->
													<!--begin::Tab item-->
													<li class="nav-item p-0 m-0">
														<!--begin::Tab link-->
														<a class="nav-link text-muted text-active-primary pt-0 pb-4" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_search">Search</a>
														<!--end::Tab link-->
													</li>
													<!--end::Tab item-->
													<!--begin::Tab item-->
													<li class="nav-item p-0 m-0">
														<!--begin::Tab link-->
														<a class="nav-link text-muted text-active-primary pt-0 pb-4" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_widgets">Widgets</a>
														<!--end::Tab link-->
													</li>
													<!--end::Tab item-->
													<!--begin::Tab item-->
													<li class="nav-item p-0 m-0">
														<!--begin::Tab link-->
														<a class="nav-link text-muted text-active-primary pt-0 pb-4" data-bs-toggle="tab" href="#kt_app_engage_prebuilts_tab_pages_email-templates">Email Templates</a>
														<!--end::Tab link-->
													</li>
													<!--end::Tab item-->
												</ul>
												<!--end::Tabs-->
											</div>
										</div>
										<!--end::Tabs wrapper-->
										<!--begin::Scroll wrapper-->
										<div class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_image" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading" data-kt-scroll-offset="250px">
											<!--begin::Tab content-->
											<div class="tab-content">
												<div class="tab-pane fade show active" id="kt_app_engage_prebuilts_tab_pages_authentication" role="tabpanel">
													<!--begin::Row-->
													<div class="row g-10">
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/layouts/corporate/sign-in.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Corporate</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/auth-corporate.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/layouts/creative/sign-in.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Creative</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/auth-creative.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/layouts/fancy/sign-in.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Fancy</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/auth-fancy.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/layouts/overlay/sign-in.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Overlay</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/auth-overlay.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/extended/multi-steps-sign-up.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Multi-step</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/auth-multistep.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/extended/two-factor-auth.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">2 Factor Auth</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/auth-2factor.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/general/password-confirmation.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Password Changed</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/auth-passwordchanged.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/general/verify-email.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Verify Email</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/auth-verifyemail.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/general/welcome.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Welcome</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/auth-welcome.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/general/coming-soon.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Coming Soon</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/auth-comingsoon.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/general/account-deactivated.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Account Deactivated</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/auth-accountdeactivated.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/general/error-404.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">404 Page</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/auth-404.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/general/error-500.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">505 Page</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/auth-500.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages_general" role="tabpanel">
													<div class="mb-5">
														<!--begin::Collapse toggle-->
														<a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible active" data-bs-toggle="collapse" href="#kt_app_engage_prebuilts_tab_pages_general_user-profile">
															<span class="fw-bolder fs-2">User Profile</span>
															<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
															<span class="svg-icon toggle-off text-primary svg-icon-2 ms-4">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																	<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																	<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
															<span class="svg-icon toggle-on text-primary svg-icon-2 ms-4">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																	<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<!--end::Collapse toggle-->
														<!--begin::Collapse content-->
														<div class="show" id="kt_app_engage_prebuilts_tab_pages_general_user-profile">
															<!--begin::Row-->
															<div class="row g-10 pt-2 pb-5">
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/user-profile/overview.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Profile Overview</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/profile-overview.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/user-profile/projects.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">User Projects</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/profile-overview.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/user-profile/campaigns.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">User Campaigns</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/profile-campaigns.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/user-profile/documents.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">User Documents</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/profile-documents.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/user-profile/followers.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">User Followers</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/profile-followers.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/user-profile/activity.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">User Activity</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/profile-activity.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
														</div>
														<!--end::Collapse content-->
													</div>
													<div class="mb-5">
														<!--begin::Collapse toggle-->
														<a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_engage_prebuilts_tab_pages_general_corporate">
															<span class="fw-bolder fs-2">Corporate</span>
															<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
															<span class="svg-icon toggle-off text-primary svg-icon-2 ms-4">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																	<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																	<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
															<span class="svg-icon toggle-on text-primary svg-icon-2 ms-4">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																	<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<!--end::Collapse toggle-->
														<!--begin::Collapse content-->
														<div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_corporate">
															<!--begin::Row-->
															<div class="row g-10 pt-2 pb-5">
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/about.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">About Us</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/corporate-aboutus.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/contact.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Contact Us</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/corporate-contactus.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/licenses.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">License</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/corporate-license.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/team.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Our Team</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/corporate-ourteam.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/sitemap.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Sitemap</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/corporate-sitemap.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
														</div>
														<!--end::Collapse content-->
													</div>
													<div class="mb-5">
														<!--begin::Collapse toggle-->
														<a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_engage_prebuilts_tab_pages_general_social">
															<span class="fw-bolder fs-2">Social</span>
															<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
															<span class="svg-icon toggle-off text-primary svg-icon-2 ms-4">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																	<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																	<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
															<span class="svg-icon toggle-on text-primary svg-icon-2 ms-4">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																	<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<!--end::Collapse toggle-->
														<!--begin::Collapse content-->
														<div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_social">
															<!--begin::Row-->
															<div class="row g-10 pt-2 pb-5">
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/social/feeds.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Activity</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/social-activity.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/social/activity.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Feeds</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/social-feeds.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/social/followers.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Followers</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/social-followers.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/social/settings.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Settings</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/social-settings.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
														</div>
														<!--end::Collapse content-->
													</div>
													<div class="mb-5">
														<!--begin::Collapse toggle-->
														<a class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_engage_prebuilts_tab_pages_general_others">
															<span class="fw-bolder fs-2">Others</span>
															<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
															<span class="svg-icon toggle-off text-primary svg-icon-2 ms-4">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																	<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																	<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
															<span class="svg-icon toggle-on text-primary svg-icon-2 ms-4">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																	<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<!--end::Collapse toggle-->
														<!--begin::Collapse content-->
														<div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_others">
															<!--begin::Row-->
															<div class="row g-10 pt-2 pb-5">
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/faq/classic.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">FAQ Classic</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/faq-classic.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/faq/extended.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">FAQ Extended</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/faq-extended.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/blog/home.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Blog Home</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/blog-home.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<!--begin::Preview-->
																	<a href="../../demo1/dist/pages/blog/post.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																		<!--begin::Title-->
																		<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Blog Post</h3>
																		<!--end::Title-->
																		<!--begin::Thumbnail-->
																		<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																			<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/blog-post.png') }}" class="lozad w-100 rounded" />
																		</span>
																		<!--end::Thumbnail-->
																	</a>
																	<!--end::Preview-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
														</div>
														<!--end::Collapse content-->
													</div>
												</div>
												<div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages_account" role="tabpanel">
													<!--begin::Row-->
													<div class="row g-10">
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/account/overview.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Overview</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/account-overview.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/account/settings.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Settings</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('.assets/media/preview/prebuilts/pages/account-settings.png/') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/account/billing.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Billing</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/account-billing.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/account/security.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Security</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/account-security.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/account/referrals.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Referrals</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/account-referrals.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/account/logs.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Logs</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/account-logs.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/account/api-keys.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">API Keys</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/account-apikeys.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/account/statements.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Statements</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/account-statements.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/account/billing.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Billing</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/account-billing.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages_modals" role="tabpanel">
													<!--begin::Row-->
													<div class="row g-10">
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/general/view-users.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">View Friends</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-viewfriends.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/general/upgrade-plan.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Upgrade Plan</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-upgradeplan.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Topup Wallet</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-topupwallet.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/general/share-earn.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Share & Earn</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-shareandearn.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/general/select-users.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Select User</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-selectuser.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/forms/bidding.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Place Bid</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-placeyourbid.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/wizards/offer-a-deal.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Offer Deal</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-offeradeal.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/forms/new-target.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">New Target</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-newtarget.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/forms/new-card.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">New Card</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-newcard.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/forms/new-address.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">New Address</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-newaddress.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/general/invite-friends.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Invite Friend</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-invitefriend.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/wizards/create-project.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Create Project</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-createproject.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/wizards/create-campaign.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Create Campaign</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-createcampaign.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/wizards/create-account.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Create Business Account</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-createbusinessacc.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/wizards/create-app.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Create App</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-createapp.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/forms/create-api-key.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Create Api Key</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-createapikey.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/modals/wizards/two-factor-authentication.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">2 Factor Auth</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/modal-2factorauth.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages_wizards" role="tabpanel">
													<!--begin::Row-->
													<div class="row g-10">
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/wizards/horizontal.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">2 Factor Auth</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/wizard-2factorauth.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/wizards/horizontal.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Horizontal</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/wizard-horizontal.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/wizards/vertical.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Vertical</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/wizard-vertical.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages_search" role="tabpanel">
													<!--begin::Row-->
													<div class="row g-10">
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/search/users.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Search Users</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/search-users.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/search/horizontal.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Search Horizontal</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/search-horizontal.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/search/vertical.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Search Vertical</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/search-vertical.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/utilities/search/select-location.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Search Location</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/search-location.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages_widgets" role="tabpanel">
													<!--begin::Row-->
													<div class="row g-10">
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/widgets/charts.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Charts</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/widgets-charts.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/widgets/feeds.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Feeds</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/widgets-feeds.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/widgets/lists.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Lists</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/widgets-lists.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/widgets/mixed.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Mixed</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/widgets-mixed.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/widgets/statistics.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Statistics</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/widgets-stats.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/widgets/tables.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Tables</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/widgets-tables.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages_email-templates" role="tabpanel">
													<!--begin::Row-->
													<div class="row g-10">
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/email/welcome-message.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Welcome</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/email-welcome.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/email/subscription-confirmed.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Subscription Confirmed</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/email-subscriptionconfirmed.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/email/reset-password.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Reset Password</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/email-resetpassword.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/email/card-declined.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Card Declined</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/email-creditcarddeclined.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/email/promo-1.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Promotion 1</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/email-promo1.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/email/promo-2.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Promotion 2</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./ssets/media/preview/demos/placeholder.jpg') }}a" data-src="{{ asset('./assets/media/preview/prebuilts/pages/email-promo2.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-4">
															<!--begin::Preview-->
															<a href="../../demo1/dist/authentication/email/promo-3.html" data-kt-href="true" class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
																<!--begin::Title-->
																<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">Promotion 3</h3>
																<!--end::Title-->
																<!--begin::Thumbnail-->
																<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
																	<img src="{{ asset('./assets/media/preview/demos/placeholder.jpg') }}" data-src="{{ asset('./assets/media/preview/prebuilts/pages/email-promo3.png') }}" class="lozad w-100 rounded" />
																</span>
																<!--end::Thumbnail-->
															</a>
															<!--end::Preview-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
											</div>
											<!--end::Tab content-->
										</div>
										<!--end::Scroll wrapper-->
									</div>
								</div>
								<!--end::Tab content-->
							</div>
							<!--end::Image view-->
							<!--begin::Text view-->
							<div class="pt-2 d-none" id="kt_app_engage_prebuilts_view_text">
								<!--begin::Heading-->
								<h1 class="fs-2x text-dark fw-bolder text-center mb-4" id="kt_app_engage_prebuilts_view_text_heading">Sitemap</h1>
								<!--end::Heading-->
								<!--begin::Wrapper-->
								<div id="kt_app_engage_prebuilts_view_text_heading" class="hover-scroll-y pe-12 me-n12" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_text" data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading" data-kt-scroll-offset="190px">
									<!--begin::Section-->
									<div class="mb-10 mb-lg-17">
										<!--begin::Title-->
										<h3 class="text-dark fw-bolder mb-7">Layouts</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/index.html">Metronic Original</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo2/index.html">SaaS App</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo30/index.html">Sales Tracking App</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo3/index.html">New Trend</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo31/index.html">Marketing Automation</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo27/index.html">Databox Dashboard</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo6/index.html">Time Reporting</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo35/index.html">Traffic Analytics</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo33/index.html">Social Campaings</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo32/index.html">Delivery Management</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo10/index.html">Project Grid</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo36/index.html">Digital Marketing</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo39/index.html">Billing SaaS</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo38/index.html">Email Marketing</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo40/index.html">HR App</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo23/index.html">Member Dashboard</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo25/index.html">User Guiding App</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo20/index.html">CRM Software</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo7/index.html">CRM Dashboard</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo11/index.html">Finance Planner</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo4/index.html">Jobs Site</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo42/index.html">Calendar Workspace</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo48/index.html">Cloud ERP</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo43/index.html">Healthcare Dashboard</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo49/index.html">KPI Tracking</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo44/index.html">Recruit Automation</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo37/index.html">Cloud Suite</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo18/index.html">Goal Tracking</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo26/index.html">Planable App</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo24/index.html">Helpdesk App</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo22/index.html">Media Publisher</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo19/index.html">Reports Panel</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo28/index.html">eCommerce App</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo29/index.html">Project Workspace</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo8/index.html">Analytics App</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo17/index.html">Events Scheduler</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo41/index.html">Business Intelligence</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo12/index.html">Data Analyzer</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo21/index.html">Monochrome App</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo34/index.html">Finance Analytics</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo15/index.html">Crypto Planner</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo14/index.html">Project Workplace</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo9/index.html">Sales Manager</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo5/index.html">Support Forum</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo13/index.html">Classic Dashboard</a>
													<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo16/index.html">Podcast App</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<div class="mb-10 mb-lg-17">
										<!--begin::Title-->
										<h3 class="text-dark fw-bolder mb-7">Dashboards</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/index.html">Multipurpose</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/marketing.html">Marketing Dashboard</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/social.html">Social Dashboard</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/ecommerce.html">eCommerce Dashboard</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/store-analytics.html">Store Analytics</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/logistics.html">Logistics</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/delivery.html">Delivery</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/online-courses.html">Online Courses</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/school.html">Hello Tyler</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/crypto.html">My Balance: 37,045$</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/finance-performance.html">Finance Performance</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/website-analytics.html">Website Analytics</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/bidding.html">Bidding Dashboard</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/podcast.html">Podcast Dashboard</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/projects.html">Projects Dashboard</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/call-center.html">Call Center</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/dashboards/pos.html">POS System</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<div class="mb-10 mb-lg-17"></div>
									<!--end::Section-->
									<!--begin::Section-->
									<div class="mb-10 mb-lg-17">
										<!--begin::Title-->
										<h3 class="text-dark fw-bolder mb-7">Pages - Authentication</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/layouts/corporate/sign-in.html">Corporate</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/layouts/creative/sign-in.html">Creative</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/layouts/fancy/sign-in.html">Fancy</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/layouts/overlay/sign-in.html">Overlay</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/extended/multi-steps-sign-up.html">Multi-step</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/extended/two-factor-auth.html">2 Factor Auth</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/general/password-confirmation.html">Password Changed</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/general/verify-email.html">Verify Email</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/general/welcome.html">Welcome</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/general/coming-soon.html">Coming Soon</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/general/account-deactivated.html">Account Deactivated</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/general/error-404.html">404 Page</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/general/error-500.html">505 Page</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<div class="mb-10 mb-lg-17">
										<!--begin::Title-->
										<h3 class="text-dark fw-bolder mb-7">Pages - Account</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/account/overview.html">Overview</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/account/settings.html">Settings</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/account/billing.html">Billing</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/account/security.html">Security</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/account/referrals.html">Referrals</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/account/logs.html">Logs</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/account/api-keys.html">API Keys</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/account/statements.html">Statements</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/account/billing.html">Billing</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<div class="mb-10 mb-lg-17">
										<!--begin::Title-->
										<h3 class="text-dark fw-bolder mb-7">Pages - Modals</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/general/view-users.html">View Friends</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/general/upgrade-plan.html">Upgrade Plan</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">Topup Wallet</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/general/share-earn.html">Share & Earn</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/general/select-users.html">Select User</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/forms/bidding.html">Place Bid</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/wizards/offer-a-deal.html">Offer Deal</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/forms/new-target.html">New Target</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/forms/new-card.html">New Card</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/forms/new-address.html">New Address</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/general/invite-friends.html">Invite Friend</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/wizards/create-project.html">Create Project</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/wizards/create-campaign.html">Create Campaign</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/wizards/create-account.html">Create Business Account</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/wizards/create-app.html">Create App</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/forms/create-api-key.html">Create Api Key</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/modals/wizards/two-factor-authentication.html">2 Factor Auth</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<div class="mb-10 mb-lg-17">
										<!--begin::Title-->
										<h3 class="text-dark fw-bolder mb-7">Pages - Wizards</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/wizards/horizontal.html">2 Factor Auth</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/wizards/horizontal.html">Horizontal</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/wizards/vertical.html">Vertical</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<div class="mb-10 mb-lg-17">
										<!--begin::Title-->
										<h3 class="text-dark fw-bolder mb-7">Pages - Search</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/search/users.html">Search Users</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/search/horizontal.html">Search Horizontal</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/search/vertical.html">Search Vertical</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/utilities/search/select-location.html">Search Location</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<div class="mb-10 mb-lg-17">
										<!--begin::Title-->
										<h3 class="text-dark fw-bolder mb-7">Pages - Widgets</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/widgets/charts.html">Charts</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/widgets/feeds.html">Feeds</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/widgets/lists.html">Lists</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/widgets/mixed.html">Mixed</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/widgets/statistics.html">Statistics</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/widgets/tables.html">Tables</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<div class="mb-10 mb-lg-17">
										<!--begin::Title-->
										<h3 class="text-dark fw-bolder mb-7">Pages - Email Templates</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/email/welcome-message.html">Welcome</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/email/subscription-confirmed.html">Subscription Confirmed</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/email/reset-password.html">Reset Password</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/email/card-declined.html">Card Declined</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/email/promo-1.html">Promotion 1</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/email/promo-2.html">Promotion 2</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/authentication/email/promo-3.html">Promotion 3</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<div class="mb-10 mb-lg-17">
										<!--begin::Title-->
										<h3 class="text-dark fw-bolder mb-7">Pages - General - User Profile</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/user-profile/overview.html">Profile Overview</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/user-profile/projects.html">User Projects</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/user-profile/campaigns.html">User Campaigns</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/user-profile/documents.html">User Documents</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/user-profile/followers.html">User Followers</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/user-profile/activity.html">User Activity</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<div class="mb-10 mb-lg-17">
										<!--begin::Title-->
										<h3 class="text-dark fw-bolder mb-7">Pages - General - Corporate</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/about.html">About Us</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/contact.html">Contact Us</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/licenses.html">License</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/team.html">Our Team</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/sitemap.html">Sitemap</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<div class="mb-10 mb-lg-17">
										<!--begin::Title-->
										<h3 class="text-dark fw-bolder mb-7">Pages - General - Social</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/social/feeds.html">Activity</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/social/activity.html">Feeds</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/social/followers.html">Followers</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/social/settings.html">Settings</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<div class="mb-10 mb-lg-17">
										<!--begin::Title-->
										<h3 class="text-dark fw-bolder mb-7">Pages - General - Others</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/faq/classic.html">FAQ Classic</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/faq/extended.html">FAQ Extended</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/blog/home.html">Blog Home</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/pages/blog/post.html">Blog Post</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
									<!--begin::Section-->
									<div class="">
										<!--begin::Title-->
										<h3 class="text-dark fw-bolder mb-7">Apps</h3>
										<!--end::Title-->
										<!--begin::Row-->
										<div class="row">
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/../../demo1/dist/apps/projects/list/list.html.html">Projects</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/../../demo1/dist/apps/ecommerce/catalog/products/products.html.html">Ecommerce</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/../../demo1/dist/apps/customers/list/list.html.html">Customers</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/../../demo1/dist/apps/subscriptions/list/list.html.html">Subscriptions</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/../../demo1/dist/apps/user-management/users/list/list.html.html">User Management</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/../../demo1/dist/apps/invoices/create/main.html.html">Invoices</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/../../demo1/dist/apps/support-center/overview/main.html.html">Support Center</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/../../demo1/dist/apps/chat/private.html.html">Chat</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/../../demo1/dist/apps/calendar/calendar.html.html">Calendar</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-3">
												<!--begin::List-->
												<div class="d-flex flex-column gap-3 gap-lg-5">
													<a class="fw-6 fw-semibold" href="../../demo1/dist/../../demo1/dist/apps/file-manager/list/folders.html.html">File Manager</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/../../demo1/dist/apps/inbox/listing/listing.html.html">Inbox</a>
													<a class="fw-6 fw-semibold" href="../../demo1/dist/../../demo1/dist/apps/contacts/getting-started.html.html">Contacts</a>
												</div>
												<!--end::List-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Text view=-->
						</div>
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Sitemap-->
		<!--end::Engage modals-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--begin::Modals-->
		<!--begin::Modal - Upgrade plan-->
		<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-xl">
				<!--begin::Modal content-->
				<div class="modal-content rounded">
					<!--begin::Modal header-->
					<div class="modal-header justify-content-end border-0 pb-0">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
						<!--begin::Heading-->
						<div class="mb-13 text-center">
							<h1 class="mb-3">Upgrade a Plan</h1>
							<div class="text-muted fw-semibold fs-5">If you need more info, please check
							<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.</div>
						</div>
						<!--end::Heading-->
						<!--begin::Plans-->
						<div class="d-flex flex-column">
							<!--begin::Nav group-->
							<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
								<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
								<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
							</div>
							<!--end::Nav group-->
							<!--begin::Row-->
							<div class="row mt-10">
								<!--begin::Col-->
								<div class="col-lg-6 mb-10 mb-lg-0">
									<!--begin::Tabs-->
									<div class="nav flex-column">
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
													<div class="fw-semibold opacity-75">Best for startups</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="advanced" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
													<div class="fw-semibold opacity-75">Best for 100+ team size</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="enterprise" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
													<span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span></div>
													<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<span class="mb-2">$</span>
												<span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
												<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
										<!--begin::Tab link-->
										<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
											<!--end::Description-->
											<div class="d-flex align-items-center me-2">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
													<input class="form-check-input" type="radio" name="plan" value="custom" />
												</div>
												<!--end::Radio-->
												<!--begin::Info-->
												<div class="flex-grow-1">
													<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
													<div class="fw-semibold opacity-75">Requet a custom license</div>
												</div>
												<!--end::Info-->
											</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="ms-5">
												<a href="#" class="btn btn-sm btn-success">Contact Us</a>
											</div>
											<!--end::Price-->
										</label>
										<!--end::Tab link-->
									</div>
									<!--end::Tabs-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-6">
									<!--begin::Tab content-->
									<div class="tab-content rounded h-100 bg-light p-10">
										<!--begin::Tab Pane-->
										<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane fade" id="kt_upgrade_plan_custom">
											<!--begin::Heading-->
											<div class="pb-5">
												<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
												<div class="text-muted fw-semibold">Optimal for corporations</div>
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
													<span class="svg-icon svg-icon-1 svg-icon-success">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tab Pane-->
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Plans-->
						<!--begin::Actions-->
						<div class="d-flex flex-center flex-row-fluid pt-12">
							<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
								<!--begin::Indicator label-->
								<span class="indicator-label">Upgrade Plan</span>
								<!--end::Indicator label-->
								<!--begin::Indicator progress-->
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								<!--end::Indicator progress-->
							</button>
						</div>
						<!--end::Actions-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Upgrade plan-->
		<!--begin::Modal - Create App-->
		<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Create App</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body py-lg-10 px-lg-10">
						<!--begin::Stepper-->
						<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
							<!--begin::Aside-->
							<div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
								<!--begin::Nav-->
								<div class="stepper-nav ps-lg-10">
									<!--begin::Step 1-->
									<div class="stepper-item current" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">1</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Details</h3>
												<div class="stepper-desc">Name your App</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Line-->
										<div class="stepper-line h-40px"></div>
										<!--end::Line-->
									</div>
									<!--end::Step 1-->
									<!--begin::Step 2-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">2</span>
											</div>
											<!--begin::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Frameworks</h3>
												<div class="stepper-desc">Define your app framework</div>
											</div>
											<!--begin::Label-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Line-->
										<div class="stepper-line h-40px"></div>
										<!--end::Line-->
									</div>
									<!--end::Step 2-->
									<!--begin::Step 3-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">3</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Database</h3>
												<div class="stepper-desc">Select the app database type</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Line-->
										<div class="stepper-line h-40px"></div>
										<!--end::Line-->
									</div>
									<!--end::Step 3-->
									<!--begin::Step 4-->
									<div class="stepper-item" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">4</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Billing</h3>
												<div class="stepper-desc">Provide payment details</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Line-->
										<div class="stepper-line h-40px"></div>
										<!--end::Line-->
									</div>
									<!--end::Step 4-->
									<!--begin::Step 5-->
									<div class="stepper-item mark-completed" data-kt-stepper-element="nav">
										<!--begin::Wrapper-->
										<div class="stepper-wrapper">
											<!--begin::Icon-->
											<div class="stepper-icon w-40px h-40px">
												<i class="stepper-check fas fa-check"></i>
												<span class="stepper-number">5</span>
											</div>
											<!--end::Icon-->
											<!--begin::Label-->
											<div class="stepper-label">
												<h3 class="stepper-title">Completed</h3>
												<div class="stepper-desc">Review and Submit</div>
											</div>
											<!--end::Label-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Step 5-->
								</div>
								<!--end::Nav-->
							</div>
							<!--begin::Aside-->
							<!--begin::Content-->
							<div class="flex-row-fluid py-lg-5 px-lg-15">
								<!--begin::Form-->
								<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
									<!--begin::Step 1-->
									<div class="current" data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
													<span class="required">App Name</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
												</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
													<span class="required">Category</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app category"></i>
												</label>
												<!--end::Label-->
												<!--begin:Options-->
												<div class="fv-row">
													<!--begin:Option-->
													<label class="d-flex flex-stack mb-5 cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor" />
																			<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">Quick Online Courses</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="1" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
													<!--begin:Option-->
													<label class="d-flex flex-stack mb-5 cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-danger">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-danger">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
																			<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
																			<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
																			<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">Face to Face Discussions</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="2" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
													<!--begin:Option-->
													<label class="d-flex flex-stack cursor-pointer">
														<!--begin:Label-->
														<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-success">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-success">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor" />
																			<path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<!--end:Icon-->
															<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">Full Intro Training</span>
																<span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
															</span>
															<!--end:Info-->
														</span>
														<!--end:Label-->
														<!--begin:Input-->
														<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="3" />
														</span>
														<!--end:Input-->
													</label>
													<!--end::Option-->
												</div>
												<!--end:Options-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 1-->
									<!--begin::Step 2-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
													<span class="required">Select Framework</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your apps framework"></i>
												</label>
												<!--end::Label-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="fab fa-html5 text-warning fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">HTML5</span>
															<span class="fs-7 text-muted">Base Web Projec</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="fab fa-react text-success fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">ReactJS</span>
															<span class="fs-7 text-muted">Robust and flexible app framework</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="2" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="fab fa-angular text-danger fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Angular</span>
															<span class="fs-7 text-muted">Powerful data mangement</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="3" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-primary">
																<i class="fab fa-vuejs text-primary fs-2x"></i>
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Vue</span>
															<span class="fs-7 text-muted">Lightweight and responsive framework</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="4" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 2-->
									<!--begin::Step 3-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="required fs-5 fw-semibold mb-2">Database Name</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
													<span class="required">Select Database Engine</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app database engine"></i>
												</label>
												<!--end::Label-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="fas fa-database text-success fs-2x"></i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">MySQL</span>
															<span class="fs-7 text-muted">Basic MySQL database</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer mb-5">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="fab fa-google text-danger fs-2x"></i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Firebase</span>
															<span class="fs-7 text-muted">Google based app data management</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="2" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer">
													<!--begin::Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="fab fa-amazon text-warning fs-2x"></i>
															</span>
														</span>
														<!--end::Icon-->
														<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">DynamoDB</span>
															<span class="fs-7 text-muted">Amazon Fast NoSQL Database</span>
														</span>
														<!--end::Info-->
													</span>
													<!--end::Label-->
													<!--begin::Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="3" />
													</span>
													<!--end::Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 3-->
									<!--begin::Step 4-->
									<div data-kt-stepper-element="content">
										<div class="w-100">
											<!--begin::Input group-->
											<div class="d-flex flex-column mb-7 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
													<span class="required">Name On Card</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
												</label>
												<!--end::Label-->
												<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="d-flex flex-column mb-7 fv-row">
												<!--begin::Label-->
												<label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
												<!--end::Label-->
												<!--begin::Input wrapper-->
												<div class="position-relative">
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
													<!--end::Input-->
													<!--begin::Card logos-->
													<div class="position-absolute translate-middle-y top-50 end-0 me-5">
														<img src="{{ asset('./assets/media/svg/card-logos/visa.svg') }}" alt="" class="h-25px" />
														<img src="{{ asset('./assets/media/svg/card-logos/mastercard.svg') }}" alt="" class="h-25px" />
														<img src="{{ asset('./assets/media/svg/card-logos/american-express.svg') }}" alt="" class="h-25px" />
													</div>
													<!--end::Card logos-->
												</div>
												<!--end::Input wrapper-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-10">
												<!--begin::Col-->
												<div class="col-md-8 fv-row">
													<!--begin::Label-->
													<label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
													<!--end::Label-->
													<!--begin::Row-->
													<div class="row fv-row">
														<!--begin::Col-->
														<div class="col-6">
															<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
																<option></option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
															</select>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-6">
															<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
																<option></option>
																<option value="2023">2023</option>
																<option value="2024">2024</option>
																<option value="2025">2025</option>
																<option value="2026">2026</option>
																<option value="2027">2027</option>
																<option value="2028">2028</option>
																<option value="2029">2029</option>
																<option value="2030">2030</option>
																<option value="2031">2031</option>
																<option value="2032">2032</option>
																<option value="2033">2033</option>
															</select>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4 fv-row">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
														<span class="required">CVV</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
													</label>
													<!--end::Label-->
													<!--begin::Input wrapper-->
													<div class="position-relative">
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
														<!--end::Input-->
														<!--begin::CVV icon-->
														<div class="position-absolute translate-middle-y top-50 end-0 me-3">
															<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
															<span class="svg-icon svg-icon-2hx">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M22 7H2V11H22V7Z" fill="currentColor" />
																	<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::CVV icon-->
													</div>
													<!--end::Input wrapper-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
													<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
													<span class="form-check-label fw-semibold text-muted">Save Card</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Input group-->
										</div>
									</div>
									<!--end::Step 4-->
									<!--begin::Step 5-->
									<div data-kt-stepper-element="content">
										<div class="w-100 text-center">
											<!--begin::Heading-->
											<h1 class="fw-bold text-dark mb-3">Release!</h1>
											<!--end::Heading-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-3">Submit your app to kickstart your project.</div>
											<!--end::Description-->
											<!--begin::Illustration-->
											<div class="text-center px-4 py-15">
												<img src="{{ asset('./assets/media/illustrations/sketchy-1/9.png') }}" alt="" class="mw-100 mh-300px" />
											</div>
											<!--end::Illustration-->
										</div>
									</div>
									<!--end::Step 5-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack pt-10">
										<!--begin::Wrapper-->
										<div class="me-2">
											<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
											<span class="svg-icon svg-icon-3 me-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
													<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->Back</button>
										</div>
										<!--end::Wrapper-->
										<!--begin::Wrapper-->
										<div>
											<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
												<span class="indicator-label">Submit
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-3 ms-2 me-0">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon--></span>
												<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
											<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></button>
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Create App-->
		<!--begin::Modal - New Target-->
		<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content rounded">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
						<!--begin:Form-->
						<form id="kt_modal_new_target_form" class="form" action="#">
							<!--begin::Heading-->
							<div class="mb-13 text-center">
								<!--begin::Title-->
								<h1 class="mb-3">Set First Target</h1>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-semibold fs-5">If you need more info, please check
								<a href="#" class="fw-bold link-primary">Project Guidelines</a>.</div>
								<!--end::Description-->
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
									<span class="required">Target Title</span>
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="row g-9 mb-8">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-semibold mb-2">Assign</label>
									<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
										<option value="">Select user...</option>
										<option value="1">Karina Clark</option>
										<option value="2">Robert Doe</option>
										<option value="3">Niel Owen</option>
										<option value="4">Olivia Wild</option>
										<option value="5">Sean Bean</option>
									</select>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-semibold mb-2">Due Date</label>
									<!--begin::Input-->
									<div class="position-relative d-flex align-items-center">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
										<span class="svg-icon svg-icon-2 position-absolute mx-4">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
												<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
												<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
										<!--end::Datepicker-->
									</div>
									<!--end::Input-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8">
								<label class="fs-6 fw-semibold mb-2">Target Details</label>
								<textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
									<span class="required">Tags</span>
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target priorty"></i>
								</label>
								<!--end::Label-->
								<input class="form-control form-control-solid" value="Important, Urgent" name="tags" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="d-flex flex-stack mb-8">
								<!--begin::Label-->
								<div class="me-5">
									<label class="fs-6 fw-semibold">Adding Users by Team Members</label>
									<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
								</div>
								<!--end::Label-->
								<!--begin::Switch-->
								<label class="form-check form-switch form-check-custom form-check-solid">
									<input class="form-check-input" type="checkbox" value="1" checked="checked" />
									<span class="form-check-label fw-semibold text-muted">Allowed</span>
								</label>
								<!--end::Switch-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-15 fv-row">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack">
									<!--begin::Label-->
									<div class="fw-semibold me-5">
										<label class="fs-6">Notifications</label>
										<div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
									</div>
									<!--end::Label-->
									<!--begin::Checkboxes-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-10">
											<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
											<span class="form-check-label fw-semibold">Email</span>
										</label>
										<!--end::Checkbox-->
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid">
											<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone" />
											<span class="form-check-label fw-semibold">Phone</span>
										</label>
										<!--end::Checkbox-->
									</div>
									<!--end::Checkboxes-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
								<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end:Form-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - New Target-->
		<!--begin::Modal - View Users-->
		<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Heading-->
						<div class="text-center mb-13">
							<!--begin::Title-->
							<h1 class="mb-3">Browse Users</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check out our
							<a href="#" class="link-primary fw-bold">Users Directory</a>.</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Users-->
						<div class="mb-15">
							<!--begin::List-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-6.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Smith
											<span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$23,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Melody Macy
											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">melody@altbox.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$50,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-1.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Max Smith
											<span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">max@kt.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$75,900</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-5.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Sean Bean
											<span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">sean@dellito.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$10,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-25.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Brian Cox
											<span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">brian@exchange.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$20,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Mikaela Collins
											<span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">mik@pex.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$9,300</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-9.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Francis Mitcham
											<span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$15,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Olivia Wild
											<span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$23,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Neil Owen
											<span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$45,800</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-23.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Dan Wilson
											<span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">dam@consilting.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$90,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Bold
											<span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">emma@intenso.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$5,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-12.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Ana Crown
											<span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$70,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Robert Doe
											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">robert@benko.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$45,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->
						</div>
						<!--end::Users-->
						<!--begin::Notice-->
						<div class="d-flex justify-content-between">
							<!--begin::Label-->
							<div class="fw-semibold">
								<label class="fs-6">Adding Users by Team Members</label>
								<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - View Users-->
		<!--begin::Modal - Users Search-->
		<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Content-->
						<div class="text-center mb-13">
							<h1 class="mb-3">Search Users</h1>
							<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
						</div>
						<!--end::Content-->
						<!--begin::Search-->
						<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
							<!--begin::Form-->
							<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
								<!--begin::Hidden input(Added to disable form autocomplete)-->
								<input type="hidden" />
								<!--end::Hidden input-->
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
								<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Input-->
								<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
								<!--end::Input-->
								<!--begin::Spinner-->
								<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
								<!--end::Spinner-->
								<!--begin::Reset-->
								<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
											<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</span>
								<!--end::Reset-->
							</form>
							<!--end::Form-->
							<!--begin::Wrapper-->
							<div class="py-5">
								<!--begin::Suggestions-->
								<div data-kt-search-element="suggestions">
									<!--begin::Heading-->
									<h3 class="fw-semibold mb-5">Recently searched:</h3>
									<!--end::Heading-->
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="{{ asset('./assets/media/avatars/300-6.jpg') }}" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
												<span class="badge badge-light">Art Director</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
												<span class="badge badge-light">Marketing Analytic</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="{{ asset('./assets/media/avatars/300-1.jpg') }}" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Max Smith</span>
												<span class="badge badge-light">Software Enginer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="{{ asset('./assets/media/avatars/300-5.jpg') }}" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
												<span class="badge badge-light">Web Developer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="{{ asset('./assets/media/avatars/300-25.jpg') }}" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
												<span class="badge badge-light">UI/UX Designer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
									</div>
									<!--end::Users-->
								</div>
								<!--end::Suggestions-->
								<!--begin::Results(add d-none to below element to hide the users list by default)-->
								<div data-kt-search-element="results" class="d-none">
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('./assets/media/avatars/300-6.jpg') }}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
													<div class="fw-semibold text-muted">smith@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
													<div class="fw-semibold text-muted">melody@altbox.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('./assets/media/avatars/300-1.jpg') }}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
													<div class="fw-semibold text-muted">max@kt.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('./assets/media/avatars/300-5.jpg') }}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
													<div class="fw-semibold text-muted">sean@dellito.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('./assets/media/avatars/300-25.jpg') }}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
													<div class="fw-semibold text-muted">brian@exchange.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
													<div class="fw-semibold text-muted">mik@pex.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('./assets/media/avatars/300-9.jpg') }}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
													<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
													<div class="fw-semibold text-muted">olivia@corpmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
													<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('./assets/media/avatars/300-23.jpg') }}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
													<div class="fw-semibold text-muted">dam@consilting.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
													<div class="fw-semibold text-muted">emma@intenso.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('./assets/media/avatars/300-12.jpg') }}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
													<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
													<div class="fw-semibold text-muted">robert@benko.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('./assets/media/avatars/300-13.jpg') }}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
													<div class="fw-semibold text-muted">miller@mapple.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
													<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('./assets/media/avatars/300-21.jpg') }}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
													<div class="fw-semibold text-muted">ethan@loop.com.au</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
													<div class="fw-semibold text-muted">olivia@corpmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Actions-->
									<div class="d-flex flex-center mt-15">
										<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
										<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Results-->
								<!--begin::Empty-->
								<div data-kt-search-element="empty" class="text-center d-none">
									<!--begin::Message-->
									<div class="fw-semibold py-10">
										<div class="text-gray-600 fs-3 mb-2">No users found</div>
										<div class="text-muted fs-6">Try to search by username, full name or email...</div>
									</div>
									<!--end::Message-->
									<!--begin::Illustration-->
									<div class="text-center px-5">
										<img src="{{ asset('./assets/media/illustrations/sketchy-1/1.png') }}" alt="" class="w-100 h-200px h-sm-325px" />
									</div>
									<!--end::Illustration-->
								</div>
								<!--end::Empty-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Search-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Users Search-->
		<!--begin::Modal - Invite Friends-->
		<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Heading-->
						<div class="text-center mb-13">
							<!--begin::Title-->
							<h1 class="mb-3">Invite a Friend</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check out
							<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Google Contacts Invite-->
						<div class="btn btn-light-primary fw-bold w-100 mb-8">
						<img alt="Logo" src="{{ asset('./assets/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3" />Invite Gmail Contacts</div>
						<!--end::Google Contacts Invite-->
						<!--begin::Separator-->
						<div class="separator d-flex flex-center mb-8">
							<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
						</div>
						<!--end::Separator-->
						<!--begin::Textarea-->
						<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
						<!--end::Textarea-->
						<!--begin::Users-->
						<div class="mb-10">
							<!--begin::Heading-->
							<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
							<!--end::Heading-->
							<!--begin::List-->
							<div class="mh-300px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-6.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
											<div class="fw-semibold text-muted">melody@altbox.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-1.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
											<div class="fw-semibold text-muted">max@kt.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-5.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
											<div class="fw-semibold text-muted">sean@dellito.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-25.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
											<div class="fw-semibold text-muted">brian@exchange.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
											<div class="fw-semibold text-muted">mik@pex.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-9.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-23.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
											<div class="fw-semibold text-muted">dam@consilting.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
											<div class="fw-semibold text-muted">emma@intenso.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-12.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
											<div class="fw-semibold text-muted">robert@benko.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-13.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
											<div class="fw-semibold text-muted">miller@mapple.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
											<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-21.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('./assets/media/avatars/300-21.jpg') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->
						</div>
						<!--end::Users-->
						<!--begin::Notice-->
						<div class="d-flex flex-stack">
							<!--begin::Label-->
							<div class="me-5 fw-semibold">
								<label class="fs-6">Adding Users by Team Members</label>
								<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Invite Friend-->
		<!--end::Modals-->
