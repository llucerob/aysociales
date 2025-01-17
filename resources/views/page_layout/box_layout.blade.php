@extends('layouts.master')

@section('title', 'Boxed')

@section('css')
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Box Layout</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('layout_light') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Page layout</li>
                        <li class="breadcrumb-item active">Boxed</li>
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
                    <div class="card-body">
                        <p>Getting start with your project custom requirements using a ready template which is quite
                            difficult and time taking process, Cuba Admin provides useful features to kick start your
                            project development with no efforts !</p>
                        <ul>
                            <li>
                                <p>Cuba Admin provides you getting start pages with different layouts, use the layout as per
                                    your custom requirements and just change the branding, menu & content.</p>
                            </li>
                            <li>
                                <p>Every components in Cuba Admin are decoupled, it means use only components you actually
                                    need! Remove unnecessary and extra code easily just by excluding the path to specific
                                    SCSS, JS file.</p>
                            </li>
                            <li>
                                <p>It use PUG as template engine to generate pages and whole template quickly using node js.
                                    Save your time for doing the common changes for each page (i.e menu, branding and
                                    footer) by generating template with pug.</p>
                            </li>
                        </ul>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;p&gt;Getting start with your project custom requirements using a ready template which is quite difficult and time taking process, Cuba Admin provides useful features to kick start your project development with no efforts !&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;p&gt;Cuba Admin provides you getting start pages with different layouts, use the layout as per your custom requirements and just change the branding, menu & content.&lt;/p&gt;&lt;/li&gt;
&lt;li&gt;&lt;p&gt;Every components in Cuba Admin are decoupled, it means use only components you actually need! Remove unnecessary and extra code easily just by excluding the path to specific SCSS, JS file.&lt;/p&gt;&lt;/li&gt;
&lt;li&gt;&lt;p&gt;It use PUG as template engine to generate pages and whole template quickly using node js. Save your time for doing the common changes for each page (i.e menu, branding and footer) by generating template with pug.&lt;/p&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>What is starter kit ?</h5>
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
                        <p>Starter kit is a set of pages with different layouts, useful for your next project to start
                            development process from scratch with no time.</p>
                        <ul>
                            <li>
                                <p>Each layout includes basic components only.</p>
                            </li>
                            <li>
                                <p>Select your choice of layout from starter kit, customize it with optional changes like
                                    colors and branding, add required dependency only.</p>
                            </li>
                            <li>
                                <p>Using template engine to generate whole template quickly with your selected layout and
                                    other custom changes. </p>
                            </li>
                        </ul>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class="custom-scrollbar"><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;p&gt;Starter kit is a set of pages with different layouts, useful for your next project to start development process from scratch with no time. &lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;p&gt;Each layout includes basic components only.&lt;/p&gt;&lt;/li&gt;
&lt;li&gt;&lt;p&gt;Select your choice of layout from starter kit, customize it with optional changes like colors and branding, add required dependency only.&lt;/p&gt;&lt;/li&gt;
&lt;li&gt;&lt;p&gt;Using template engine to generate whole template quickly with your selected layout and other custom changes.&lt;/p&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Simple Card</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-2">HTML Content Presents</h6>
                        <p><strong>Create an account</strong> on the chosen ticketing platform and set up your workspace.
                            Customize it according to your projects and team, if applicable. Set permissions and access
                            levels for team members and clients, if necessary.<em>Individual pieces of software called
                                WordPress plugins</em> let you extend the functionality of your website. You may install
                            each of these pieces of software on your<code> WordPress website </code><a href="#!">they
                                are using support</a> the widget before adding it. It's conceivable that the issue is
                            brought on by a lack of functionality.</p>
                        <h6 class="mb-2">Header Level 2</h6>
                        <ol>
                            <li>Every screen size is accommodated with a responsive website</li>
                            <li>Coding is the art of engineering</li>
                        </ol>
                        <blockquote>
                            <p>The usefulness and usability of a website, not its aesthetic design, define its success or
                                failure. User-centric design has become the norm for effective and financially motivated web
                                design since the visitor to the website is the only one who clicks the mouse and thus
                                determines everything. After all, a feature might as well not exist if people can't utilise
                                it.</p>
                        </blockquote>
                        <h4 class="mb-2">Header Level<span> 3</span></h4>
                        <ul>
                            <li>Plugins and tools for seamless WordPress integration</li>
                            <li>Stars require darkness to shine.</li>
                        </ul>
                        <pre>#header h1 a {
display: block;
width: 300px;
height: 80px;
}</pre>
                        <dl>
                            <dt>Definition list</dt>
                            <dd>It is used to systematically arrange and convey words and the meanings that go with them.
                                Typically, there are two basic components to a definition list: the word or "defined term"
                                and the associated definition or "description."</dd>
                            <dt>Meta tags in wordPress</dt>
                            <dd>Security Scan: Protecting Against Vulnerabilities.</dd>
                        </dl>
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
