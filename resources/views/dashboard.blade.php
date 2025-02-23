@extends('layouts.master')

@section('title', 'RTL')

@section('css')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Layout RTL</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Page layout</li>
                        <li class="breadcrumb-item active">RTL</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Kick start your project development !</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
            
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>How to use starter kit ?</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa-solid fa-gear fa-spin"></i></li>
                                <li><i class="view-html fa-solid fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <p><span class="f-w-600">HTML</span></p>
                        <p>If you know just HTML, select your choice of layout from starter kit folder, customize it with
                            optional changes like colors and branding, add required dependency only.</p>
                        <p><span class="f-w-600">PUG</span></p>
                        <p>To use PUG it required node.js and basic knowledge of using it. Using PUG as template engine to
                            generate whole template quickly with your selected layout and other custom changes. To getting
                            start with PUG usage & template generating process please refer template documentation.</p>
                        <div class="alert alert-primary inverse" role="alert"><i class="icon-info-alt"></i>
                            <h5>Tips!</h5>
                            <p>Hideable navbar option is available for fixed navbar with static navigation only. Works in
                                top and bottom positions, single and multiple navbars.</p>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;p&gt;&lt;span class="f-w-600"&gt;HTML&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;If you know just HTML, select your choice of layout from starter kit folder, customize it with optional changes like colors and branding, add required dependency only.&lt;/p&gt;
&lt;p&gt;&lt;span class="f-w-600"&gt;PUG&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;To use PUG it required node.js and basic knowledge of using it. Using PUG as template engine to generate whole template quickly with your selected layout and other custom changes. To getting start with PUG usage & template generating process please refer template documentation.&lt;/p&gt;
&lt;div class="alert alert-primary inverse" role="alert"&gt;
&lt;i class="icon-info-alt"&gt;&lt;/i&gt;
&lt;h5&gt;Tips!&lt;/h5&gt;
&lt;p&gt;Hideable navbar option is available for fixed navbar with static navigation only. Works in top and bottom positions, single and multiple navbars.&lt;/p&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>With Header</h5>
                    </div>
                    <div class="card-body">
                        <h5>Content title</h5>
                        <p>Add a heading to card with <code>.card-header</code> class</p>
                        <p>You may also include any &lt;h1&gt;-&lt;h6&gt; with a <code>.card-header </code> &
                            <code>.card-title</code> class to add heading.</p>
                        <p>While there is no right or incorrect response, a professional designer should be well-versed in
                            UX and be able to provide a complete end-to-end UX design process.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-no-border">
                        <h5>With Header & No Border</h5>
                    </div>
                    <div class="card-body">
                        <h5>Content title</h5>
                        <p>Add a heading to card with <code>.card-header </code> class & without header
                            border<code>.border-bottom-0</code> class.</p>
                        <p>You may also include any &lt;h1&gt;-&lt;h6&gt; with a <code>.card-header </code> &
                            <code>.card-title</code> class to add heading.</p>
                        <p>Users must first make sure that the themes they are using support the widget before adding it.
                            It's conceivable that the issue is brought on by a lack of functionality.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')

@endsection
