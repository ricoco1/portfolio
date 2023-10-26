<section class="contact-me" id="contact-me">
    <div class="container">
        <p class="mb-0 text-secondary">Contact</p>
        <h2 class="section-title text-primary mb-4">Hubungi Saya</h2>

        <div class="row">
            <div class="col-md-6">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ url('submitform') }}" method="POST" id="contact-form">
                    @csrf
                    <input value="{{old('name')}}" type="text" name="name" id="name" placeholder="Name"
                        class="form-control bg-dark-alt shadow-none text-white rounded-0 mb-2">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input value="{{old('email')}}" type="email" name="email" id="email" placeholder="e-mail"
                        class="form-control bg-dark-alt shadow-none text-white rounded-0 mb-2">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <textarea name="message" id="message" cols="30" rows="3" placeholder="Message"
                        class="form-control bg-dark-alt shadow-none text-white rounded-0 mb-3">{{old('message')}}</textarea>
                    @error('message')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <button type="submit" class="btn btn-orange w-100 rounded-0">Submit</button>
                </form>
            </div>
        </div>
</section>
