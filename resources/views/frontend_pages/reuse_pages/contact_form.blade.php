
<section class="s-pb-130 s-pb-lg-170">
    <div class="container" style="padding-right: 0px !important">
        <form class="c-mb-20 c-gutter-20" method="POST" action="{{ route('client.message') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group has-placeholder">
                        <label for="name">Nom complet
                            <span class="required">*</span>
                        </label>
                        <input type="text" aria-required="true" size="30" value="{{ old('client_name') }}" name="client_name" id="client_name" class="form-control" placeholder="Nom complet">
                        @error('client_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-placeholder">
                        <label for="email">Adresse électronique
                            <span class="required">*</span>
                        </label>
                        <input type="email" aria-required="true" size="30" value="{{ old('client_email') }}" name="client_email" id="client_email" class="form-control" placeholder="Adresse électronique">
                        @error('client_email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6">
                    <div class="form-group has-placeholder">
                        <label for="phone">Numéro de téléphone
                            <span class="required">*</span>
                        </label>
                        <input type="text" aria-required="true" size="30" value="" name="client_phone" id="client_phone" class="form-control" placeholder="Numéro de téléphone">
                        @error('client_phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group has-placeholder">
                        <label for="subject">Objet du message
                            <span class="required">*</span>
                        </label>
                        <input type="text" aria-required="true" size="30" value="{{ old('message_subject') }}" name="message_subject" id="message_subject" class="form-control" placeholder="Votre sujet">
                        @error('message_subject')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group has-placeholder">
                        <label for="client_message">Votre message</label>
                        <textarea aria-required="true" rows="6" cols="45" name="client_message" id="client_message" class="form-control" placeholder="Votre message">{{ old('client_message') }}</textarea>
                        @error('client_message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center mt-15">
                    <div class="form-group">
                        <button type="submit" id="contact_form_submit" class="btn btn-maincolor">Envoyer un message
                        </button>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <div class="d-none d-lg-block divider-75"></div>
</section>
