<!-- Gallery Section -->
<section id="gallery" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-uppercase text-teal fw-bold letter-spacing-2 small">Our Work</span>
            <h2 class="section-title mt-2">Hospital Gallery</h2>
            <div class="divider mx-auto mt-3 bg-teal" style="width: 60px; height: 3px;"></div>
            <p class="text-muted mx-auto mt-3" style="max-width: 600px;">
                Browse images of our advanced facilities, surgeries, successful recoveries, and community events.
            </p>
        </div>

        <!-- Filter Buttons -->
        <div class="d-flex justify-content-center flex-wrap gap-3 mb-5" data-aos="fade-up">
            <button type="button" class="btn btn-outline-teal px-4 rounded-pill gallery-filter active"
                data-filter="all">All</button>
            <button type="button" class="btn btn-outline-teal px-4 rounded-pill gallery-filter"
                data-filter="surgeries">Surgeries</button>
            <button type="button" class="btn btn-outline-teal px-4 rounded-pill gallery-filter"
                data-filter="facilities">Facilities</button>
            <button type="button" class="btn btn-outline-teal px-4 rounded-pill gallery-filter"
                data-filter="events">Events</button>
            <button type="button" class="btn btn-outline-teal px-4 rounded-pill gallery-filter"
                data-filter="patients">Patients</button>
        </div>

        <!-- Gallery Grid -->
        <div class="row g-4" id="galleryGrid">
            <!-- Surgery 1 -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="surgeries">
                <div class="gallery-card rounded-3 overflow-hidden position-relative shadow-sm h-100">
                    <img src="https://images.pexels.com/photos/3845766/pexels-photo-3845766.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="Surgery">
                    <div class="gallery-overlay">
                        <i class="bi bi-zoom-in text-white fs-2"></i>
                    </div>
                </div>
            </div>
            <!-- Surgery 2 -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="surgeries">
                <div class="gallery-card rounded-3 overflow-hidden position-relative shadow-sm h-100">
                    <img src="https://images.pexels.com/photos/4386466/pexels-photo-4386466.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="Surgery">
                    <div class="gallery-overlay">
                        <i class="bi bi-zoom-in text-white fs-2"></i>
                    </div>
                </div>
            </div>

            <!-- Facility 1 -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="facilities">
                <div class="gallery-card rounded-3 overflow-hidden position-relative shadow-sm h-100">
                    <img src="https://images.pexels.com/photos/247786/pexels-photo-247786.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="Facility">
                    <div class="gallery-overlay">
                        <i class="bi bi-zoom-in text-white fs-2"></i>
                    </div>
                </div>
            </div>
            <!-- Facility 2 -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="facilities">
                <div class="gallery-card rounded-3 overflow-hidden position-relative shadow-sm h-100">
                    <img src="https://images.pexels.com/photos/3938023/pexels-photo-3938023.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="Facility">
                    <div class="gallery-overlay">
                        <i class="bi bi-zoom-in text-white fs-2"></i>
                    </div>
                </div>
            </div>

            <!-- Event 1 -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="events">
                <div class="gallery-card rounded-3 overflow-hidden position-relative shadow-sm h-100">
                    <img src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="Event">
                    <div class="gallery-overlay">
                        <i class="bi bi-zoom-in text-white fs-2"></i>
                    </div>
                </div>
            </div>
            <!-- Event 2 -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="events">
                <div class="gallery-card rounded-3 overflow-hidden position-relative shadow-sm h-100">
                    <img src="https://images.pexels.com/photos/3184297/pexels-photo-3184297.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="Event">
                    <div class="gallery-overlay">
                        <i class="bi bi-zoom-in text-white fs-2"></i>
                    </div>
                </div>
            </div>

            <!-- Patient 1 -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="patients">
                <div class="gallery-card rounded-3 overflow-hidden position-relative shadow-sm h-100">
                    <img src="https://images.pexels.com/photos/7446990/pexels-photo-7446990.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="Patient">
                    <div class="gallery-overlay">
                        <i class="bi bi-zoom-in text-white fs-2"></i>
                    </div>
                </div>
            </div>
            <!-- Patient 2 -->
            <div class="col-md-4 col-lg-3 gallery-item" data-category="patients">
                <div class="gallery-card rounded-3 overflow-hidden position-relative shadow-sm h-100">
                    <img src="https://images.pexels.com/photos/7089401/pexels-photo-7089401.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="Patient">
                    <div class="gallery-overlay">
                        <i class="bi bi-zoom-in text-white fs-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Lightbox Modal -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0 position-relative text-center">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-index-3"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    <img src="" id="galleryModalImg" class="img-fluid rounded-3 shadow-lg" alt="Gallery Image"
                        style="max-height: 85vh;">
                </div>
            </div>
        </div>
    </div>
</section>