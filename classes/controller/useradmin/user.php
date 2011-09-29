
    

  

<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <title>classes/controller/useradmin/user.php at 548314cea8928573827a0c706c13187270cd9dff from jnbdz/useradmin - GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />

    
    

    <meta content="authenticity_token" name="csrf-param" />
<meta content="fdf7c8fdfcf1ef5dff34e68e0e933561f184dd30" name="csrf-token" />

    <link href="https://a248.e.akamai.net/assets.github.com/stylesheets/bundle_github.css?99766cdb718bb9086adb2a9afccc6a0e735e5f3b" media="screen" rel="stylesheet" type="text/css" />
    

    <script src="https://a248.e.akamai.net/assets.github.com/javascripts/bundle_jquery.js?05576a4333d53119fdd7574e01ba174f2c5331f9" type="text/javascript"></script>

    <script src="https://a248.e.akamai.net/assets.github.com/javascripts/bundle_github.js?a5260dc37ff9fb00ce40d9c367de486385b18262" type="text/javascript"></script>

    

    
  <link rel='permalink' href='/jnbdz/useradmin/blob/548314cea8928573827a0c706c13187270cd9dff/classes/controller/useradmin/user.php'>

  <link href="https://github.com/jnbdz/useradmin/commits/548314cea8928573827a0c706c13187270cd9dff.atom" rel="alternate" title="Recent Commits to useradmin:548314cea8928573827a0c706c13187270cd9dff" type="application/atom+xml" />

    <META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">

    <meta name="description" content="useradmin - User administration and auth for Kohana 3" />
  
  </head>

  

  <body class="logged_out page-blob  env-production">
    

    

    

    <div class="subnavd" id="main">
      <div id="header" class="true">
          <a class="logo" href="https://github.com">
            <img alt="github" class="default svg" height="45" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov6.svg" />
            <img alt="github" class="default png" height="45" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov6.png" />
            <!--[if (gt IE 8)|!(IE)]><!-->
            <img alt="github" class="hover svg" height="45" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov6-hover.svg" />
            <img alt="github" class="hover png" height="45" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov6-hover.png" />
            <!--<![endif]-->
          </a>

        
        <div class="topsearch">
  
    <!--
      make sure to use fully qualified URLs here since this nav
      is used on error pages on other domains
    -->
    <ul class="nav logged_out">
      
      <li class="pricing"><a href="https://github.com/plans">Pricing and Signup</a></li>
      
      <li class="explore"><a href="https://github.com/explore">Explore GitHub</a></li>
      <li class="features"><a href="https://github.com/features">Features</a></li>
      
      <li class="blog"><a href="https://github.com/blog">Blog</a></li>
      
      <li class="login"><a href="https://github.com/login?return_to=%2Fjnbdz%2Fuseradmin%2Fblob%2F548314cea8928573827a0c706c13187270cd9dff%2Fclasses%2Fcontroller%2Fuseradmin%2Fuser.php">Login</a></li>
    </ul>
  
</div>

      </div>

      
      
        
    <div class="site">
      <div class="pagehead repohead vis-public fork   instapaper_ignore readability-menu">

      

      <div class="title-actions-bar">
        <h1>
          <a href="/jnbdz">jnbdz</a> /
          <strong><a href="/jnbdz/useradmin" class="js-current-repository">useradmin</a></strong>
          
            <span class="fork-flag">
              
              <span class="text">forked from <a href="/mixu/useradmin">mixu/useradmin</a></span>
            </span>
          
          
        </h1>

        
    <ul class="actions">
      

      
        
        <li>
          
            <a href="/jnbdz/useradmin/toggle_watch" class="minibutton btn-watch watch-button" onclick="var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'fdf7c8fdfcf1ef5dff34e68e0e933561f184dd30'); f.appendChild(s);f.submit();return false;"><span><span class="icon"></span>Watch</span></a>
          
        </li>
        
          
            <li><a href="/jnbdz/useradmin/fork" class="minibutton btn-fork fork-button" onclick="var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;var s = document.createElement('input'); s.setAttribute('type', 'hidden'); s.setAttribute('name', 'authenticity_token'); s.setAttribute('value', 'fdf7c8fdfcf1ef5dff34e68e0e933561f184dd30'); f.appendChild(s);f.submit();return false;"><span><span class="icon"></span>Fork</span></a></li>
          

          
        
      
      
      <li class="repostats">
        <ul class="repo-stats">
          <li class="watchers ">
            <a href="/jnbdz/useradmin/watchers" title="Watchers" class="tooltipped downwards">
              2
            </a>
          </li>
          <li class="forks">
            <a href="/jnbdz/useradmin/network" title="Forks" class="tooltipped downwards">
              20
            </a>
          </li>
        </ul>
      </li>
    </ul>

      </div>

        
  <ul class="tabs">
    <li><a href="/jnbdz/useradmin/tree/" class="selected" highlight="repo_source">Source</a></li>
    <li><a href="/jnbdz/useradmin/commits/" highlight="repo_commits">Commits</a></li>
    <li><a href="/jnbdz/useradmin/network" highlight="repo_network">Network</a></li>
    <li><a href="/jnbdz/useradmin/pulls" highlight="repo_pulls">Pull Requests (0)</a></li>

    

    

            
    <li><a href="/jnbdz/useradmin/graphs" highlight="repo_graphs">Graphs</a></li>

    

    <li class="contextswitch nochoices">
      <span class="repo-tree toggle leftwards tooltipped"
            title="548314cea8928573827a0c706c13187270cd9dff"
            data-master-branch="master"
            data-ref="">
        <em>Tree:</em>
        <code>548314c</code>
      </span>
    </li>
  </ul>

  <div style="display:none" id="pl-description"><p><em class="placeholder">click here to add a description</em></p></div>
  <div style="display:none" id="pl-homepage"><p><em class="placeholder">click here to add a homepage</em></p></div>

  <div class="subnav-bar">
  
  <ul>
    <li>
      <a href="/jnbdz/useradmin/branches" class="dropdown">Switch Branches (1)</a>
      <ul class="subnav-dropdown-branches">
                                        <li><a href="/jnbdz/useradmin/blob/master/classes/controller/useradmin/user.php">master</a></li>
          
        
      </ul>
    </li>
    <li>
      <a href="#" class="dropdown ">Switch Tags (1)</a>
              <ul class="subnav-dropdown-tags">
                      
              <li><a href="/jnbdz/useradmin/blob/3.0/end-of-life/classes/controller/useradmin/user.php">3.0/end-of-life</a></li>
            
                  </ul>
      
    </li>
    <li>
    
    <a href="/jnbdz/useradmin/branches/master" class="manage">Branch List</a>
    
    </li>
  </ul>
</div>

  
  
  
  
  
  



        
    <div id="repo_details" class="metabox clearfix">
      <div id="repo_details_loader" class="metabox-loader" style="display:none">Sending Request&hellip;</div>

      
        <a href="/jnbdz/useradmin/downloads" class="download-source" data-facebox-url="/jnbdz/useradmin/archives/548314cea8928573827a0c706c13187270cd9dff" id="download_button" title="Download source, tagged packages and binaries."><span class="icon"></span>Downloads</a>
      

      <div id="repository_desc_wrapper">
      <div id="repository_description" rel="repository_description_edit">
        
          <p>User administration and auth for Kohana 3
            <span id="read_more" style="display:none">&mdash; <a href="#readme">Read more</a></span>
          </p>
        
      </div>

      <div id="repository_description_edit" style="display:none;" class="inline-edit">
        <form action="/jnbdz/useradmin/admin/update" method="post"><div style="margin:0;padding:0"><input name="authenticity_token" type="hidden" value="fdf7c8fdfcf1ef5dff34e68e0e933561f184dd30" /></div>
          <input type="hidden" name="field" value="repository_description">
          <input type="text" class="textfield" name="value" value="User administration and auth for Kohana 3">
          <div class="form-actions">
            <button class="minibutton"><span>Save</span></button> &nbsp; <a href="#" class="cancel">Cancel</a>
          </div>
        </form>
      </div>

      
      <div class="repository-homepage" id="repository_homepage" rel="repository_homepage_edit">
        <p><a href="http://blog.mixu.net/2011/01/13/getting-started-with-useradmin-my-kohana-3-auth-admin-module/" rel="nofollow">http://blog.mixu.net/2011/01/13/getting-started-with-useradmin-my-kohana-3-auth-admin-module/</a></p>
      </div>

      <div id="repository_homepage_edit" style="display:none;" class="inline-edit">
        <form action="/jnbdz/useradmin/admin/update" method="post"><div style="margin:0;padding:0"><input name="authenticity_token" type="hidden" value="fdf7c8fdfcf1ef5dff34e68e0e933561f184dd30" /></div>
          <input type="hidden" name="field" value="repository_homepage">
          <input type="text" class="textfield" name="value" value="http://blog.mixu.net/2011/01/13/getting-started-with-useradmin-my-kohana-3-auth-admin-module/">
          <div class="form-actions">
            <button class="minibutton"><span>Save</span></button> &nbsp; <a href="#" class="cancel">Cancel</a>
          </div>
        </form>
      </div>
      </div>
      <div class="rule "></div>
      <div class="url-box">
  

  <ul class="clone-urls">
    
      
      <li class="http_clone_url"><a href="https://github.com/jnbdz/useradmin.git" data-permissions="Read-Only">HTTP</a></li>
      <li class="public_clone_url"><a href="git://github.com/jnbdz/useradmin.git" data-permissions="Read-Only">Git Read-Only</a></li>
    
    
  </ul>
  <input type="text" spellcheck="false" class="url-field" />
        <span style="display:none" id="clippy_1165" class="clippy-text"></span>
      <span id="clippy_tooltip_clippy_1165" class="clippy-tooltip tooltipped" title="copy to clipboard">
      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
              width="14"
              height="14"
              class="clippy"
              id="clippy" >
      <param name="movie" value="https://a248.e.akamai.net/assets.github.com/flash/clippy.swf?v5"/>
      <param name="allowScriptAccess" value="always" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param NAME="FlashVars" value="id=clippy_1165&amp;copied=copied!&amp;copyto=copy to clipboard">
      <param name="bgcolor" value="#FFFFFF">
      <param name="wmode" value="opaque">
      <embed src="https://a248.e.akamai.net/assets.github.com/flash/clippy.swf?v5"
             width="14"
             height="14"
             name="clippy"
             quality="high"
             allowScriptAccess="always"
             type="application/x-shockwave-flash"
             pluginspage="http://www.macromedia.com/go/getflashplayer"
             FlashVars="id=clippy_1165&amp;copied=copied!&amp;copyto=copy to clipboard"
             bgcolor="#FFFFFF"
             wmode="opaque"
      />
      </object>
      </span>

  <p class="url-description"><strong>Read+Write</strong> access</p>
</div>

    </div>

    <div class="frame frame-center tree-finder" style="display:none" data-tree-list-url="/jnbdz/useradmin/tree-list/548314cea8928573827a0c706c13187270cd9dff" data-blob-url-prefix="/jnbdz/useradmin/blob/548314cea8928573827a0c706c13187270cd9dff">
      <div class="breadcrumb">
        <b><a href="/jnbdz/useradmin">useradmin</a></b> /
        <input class="tree-finder-input" type="text" name="query" autocomplete="off" spellcheck="false">
      </div>

      
        <div class="octotip">
          <p>
            <a href="/jnbdz/useradmin/dismiss-tree-finder-help" class="dismiss js-dismiss-tree-list-help" title="Hide this notice forever">Dismiss</a>
            <strong>Octotip:</strong> You've activated the <em>file finder</em> by pressing <span class="kbd">t</span>
            Start typing to filter the file list. Use <span class="kbd badmono">↑</span> and <span class="kbd badmono">↓</span> to navigate,
            <span class="kbd">enter</span> to view files.
          </p>
        </div>
      

      <table class="tree-browser" cellpadding="0" cellspacing="0">
        <tr class="js-header"><th>&nbsp;</th><th>name</th></tr>
        <tr class="js-no-results no-results" style="display: none">
          <th colspan="2">No matching files</th>
        </tr>
        <tbody class="js-results-list">
        </tbody>
      </table>
    </div>

    <div id="jump-to-line" style="display:none">
      <h2>Jump to Line</h2>
      <form>
        <input class="textfield" type="text">
        <div class="full-button">
          <button type="submit" class="classy">
            <span>Go</span>
          </button>
        </div>
      </form>
    </div>


        

      </div><!-- /.pagehead -->

      

  













  <div class="commit commit-tease js-details-container">
  
  <p class="commit-title ">
    
      <a href="/jnbdz/useradmin/commit/548314cea8928573827a0c706c13187270cd9dff">removed in register action method errors method that added the error mes...</a>
      <a href="javascript:;" class="minibutton expander-minibutton js-details-target"><span>…</span></a>
    
  </p>
  
    <div class="commit-desc"><pre>...sages</pre></div>
  
  <div class="commit-meta">
    <a href="/jnbdz/useradmin/commit/548314cea8928573827a0c706c13187270cd9dff" class="sha-block">commit <span class="sha">548314cea8</span></a>

    <div class="authorship">
      
      <img src="https://secure.gravatar.com/avatar/6ab2fc0ca68903f2696a4c96f1c94dd0?s=140&d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-140.png" alt="" width="20" height="20" class="gravatar" />
      <span class="author-name"><a href="/jnbdz">jnbdz</a></span>
      authored <time class="js-relative-date" datetime="2011-09-28T16:39:29-07:00" title="2011-09-28 16:39:29">September 28, 2011</time>

      
    </div>
  </div>
</div>




  <div id="slider">

  

    <div class="breadcrumb" data-path="classes/controller/useradmin/user.php/">
      <b><a href="/jnbdz/useradmin/tree/548314cea8928573827a0c706c13187270cd9dff" class="js-rewrite-sha">useradmin</a></b> / <a href="/jnbdz/useradmin/tree/548314cea8928573827a0c706c13187270cd9dff/classes" class="js-rewrite-sha">classes</a> / <a href="/jnbdz/useradmin/tree/548314cea8928573827a0c706c13187270cd9dff/classes/controller" class="js-rewrite-sha">controller</a> / <a href="/jnbdz/useradmin/tree/548314cea8928573827a0c706c13187270cd9dff/classes/controller/useradmin" class="js-rewrite-sha">useradmin</a> / user.php       <span style="display:none" id="clippy_3828" class="clippy-text">classes/controller/useradmin/user.php</span>
      
      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
              width="110"
              height="14"
              class="clippy"
              id="clippy" >
      <param name="movie" value="https://a248.e.akamai.net/assets.github.com/flash/clippy.swf?v5"/>
      <param name="allowScriptAccess" value="always" />
      <param name="quality" value="high" />
      <param name="scale" value="noscale" />
      <param NAME="FlashVars" value="id=clippy_3828&amp;copied=copied!&amp;copyto=copy to clipboard">
      <param name="bgcolor" value="#FFFFFF">
      <param name="wmode" value="opaque">
      <embed src="https://a248.e.akamai.net/assets.github.com/flash/clippy.swf?v5"
             width="110"
             height="14"
             name="clippy"
             quality="high"
             allowScriptAccess="always"
             type="application/x-shockwave-flash"
             pluginspage="http://www.macromedia.com/go/getflashplayer"
             FlashVars="id=clippy_3828&amp;copied=copied!&amp;copyto=copy to clipboard"
             bgcolor="#FFFFFF"
             wmode="opaque"
      />
      </object>
      

    </div>

    <div class="frames">
      <div class="frame frame-center" data-path="classes/controller/useradmin/user.php/" data-permalink-url="/jnbdz/useradmin/blob/548314cea8928573827a0c706c13187270cd9dff/classes/controller/useradmin/user.php" data-title="classes/controller/useradmin/user.php at 548314cea8928573827a0c706c13187270cd9dff from jnbdz/useradmin - GitHub" data-type="blob">
        
          <ul class="big-actions">
            <li><a class="file-edit-link minibutton js-rewrite-sha" href="/jnbdz/useradmin/edit/548314cea8928573827a0c706c13187270cd9dff/classes/controller/useradmin/user.php"><span>Edit this file</span></a></li>
          </ul>
        

        <div id="files">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><img alt="Txt" height="16" src="https://a248.e.akamai.net/assets.github.com/images/icons/txt.png" width="16" /></span>
                <span class="mode" title="File Mode">100755</span>
                
                  <span>814 lines (753 sloc)</span>
                
                <span>35.109 kb</span>
              </div>
              <ul class="actions">
                <li><a href="/jnbdz/useradmin/raw/548314cea8928573827a0c706c13187270cd9dff/classes/controller/useradmin/user.php" id="raw-url">raw</a></li>
                
                  <li><a href="/jnbdz/useradmin/blame/548314cea8928573827a0c706c13187270cd9dff/classes/controller/useradmin/user.php">blame</a></li>
                
                <li><a href="/jnbdz/useradmin/commits/548314cea8928573827a0c706c13187270cd9dff/classes/controller/useradmin/user.php">history</a></li>
              </ul>
            </div>
            
  <div class="data type-php">
    
      <table cellpadding="0" cellspacing="0" class="lines">
        <tr>
          <td>
            <pre class="line_numbers"><span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
<span id="L299" rel="#L299">299</span>
<span id="L300" rel="#L300">300</span>
<span id="L301" rel="#L301">301</span>
<span id="L302" rel="#L302">302</span>
<span id="L303" rel="#L303">303</span>
<span id="L304" rel="#L304">304</span>
<span id="L305" rel="#L305">305</span>
<span id="L306" rel="#L306">306</span>
<span id="L307" rel="#L307">307</span>
<span id="L308" rel="#L308">308</span>
<span id="L309" rel="#L309">309</span>
<span id="L310" rel="#L310">310</span>
<span id="L311" rel="#L311">311</span>
<span id="L312" rel="#L312">312</span>
<span id="L313" rel="#L313">313</span>
<span id="L314" rel="#L314">314</span>
<span id="L315" rel="#L315">315</span>
<span id="L316" rel="#L316">316</span>
<span id="L317" rel="#L317">317</span>
<span id="L318" rel="#L318">318</span>
<span id="L319" rel="#L319">319</span>
<span id="L320" rel="#L320">320</span>
<span id="L321" rel="#L321">321</span>
<span id="L322" rel="#L322">322</span>
<span id="L323" rel="#L323">323</span>
<span id="L324" rel="#L324">324</span>
<span id="L325" rel="#L325">325</span>
<span id="L326" rel="#L326">326</span>
<span id="L327" rel="#L327">327</span>
<span id="L328" rel="#L328">328</span>
<span id="L329" rel="#L329">329</span>
<span id="L330" rel="#L330">330</span>
<span id="L331" rel="#L331">331</span>
<span id="L332" rel="#L332">332</span>
<span id="L333" rel="#L333">333</span>
<span id="L334" rel="#L334">334</span>
<span id="L335" rel="#L335">335</span>
<span id="L336" rel="#L336">336</span>
<span id="L337" rel="#L337">337</span>
<span id="L338" rel="#L338">338</span>
<span id="L339" rel="#L339">339</span>
<span id="L340" rel="#L340">340</span>
<span id="L341" rel="#L341">341</span>
<span id="L342" rel="#L342">342</span>
<span id="L343" rel="#L343">343</span>
<span id="L344" rel="#L344">344</span>
<span id="L345" rel="#L345">345</span>
<span id="L346" rel="#L346">346</span>
<span id="L347" rel="#L347">347</span>
<span id="L348" rel="#L348">348</span>
<span id="L349" rel="#L349">349</span>
<span id="L350" rel="#L350">350</span>
<span id="L351" rel="#L351">351</span>
<span id="L352" rel="#L352">352</span>
<span id="L353" rel="#L353">353</span>
<span id="L354" rel="#L354">354</span>
<span id="L355" rel="#L355">355</span>
<span id="L356" rel="#L356">356</span>
<span id="L357" rel="#L357">357</span>
<span id="L358" rel="#L358">358</span>
<span id="L359" rel="#L359">359</span>
<span id="L360" rel="#L360">360</span>
<span id="L361" rel="#L361">361</span>
<span id="L362" rel="#L362">362</span>
<span id="L363" rel="#L363">363</span>
<span id="L364" rel="#L364">364</span>
<span id="L365" rel="#L365">365</span>
<span id="L366" rel="#L366">366</span>
<span id="L367" rel="#L367">367</span>
<span id="L368" rel="#L368">368</span>
<span id="L369" rel="#L369">369</span>
<span id="L370" rel="#L370">370</span>
<span id="L371" rel="#L371">371</span>
<span id="L372" rel="#L372">372</span>
<span id="L373" rel="#L373">373</span>
<span id="L374" rel="#L374">374</span>
<span id="L375" rel="#L375">375</span>
<span id="L376" rel="#L376">376</span>
<span id="L377" rel="#L377">377</span>
<span id="L378" rel="#L378">378</span>
<span id="L379" rel="#L379">379</span>
<span id="L380" rel="#L380">380</span>
<span id="L381" rel="#L381">381</span>
<span id="L382" rel="#L382">382</span>
<span id="L383" rel="#L383">383</span>
<span id="L384" rel="#L384">384</span>
<span id="L385" rel="#L385">385</span>
<span id="L386" rel="#L386">386</span>
<span id="L387" rel="#L387">387</span>
<span id="L388" rel="#L388">388</span>
<span id="L389" rel="#L389">389</span>
<span id="L390" rel="#L390">390</span>
<span id="L391" rel="#L391">391</span>
<span id="L392" rel="#L392">392</span>
<span id="L393" rel="#L393">393</span>
<span id="L394" rel="#L394">394</span>
<span id="L395" rel="#L395">395</span>
<span id="L396" rel="#L396">396</span>
<span id="L397" rel="#L397">397</span>
<span id="L398" rel="#L398">398</span>
<span id="L399" rel="#L399">399</span>
<span id="L400" rel="#L400">400</span>
<span id="L401" rel="#L401">401</span>
<span id="L402" rel="#L402">402</span>
<span id="L403" rel="#L403">403</span>
<span id="L404" rel="#L404">404</span>
<span id="L405" rel="#L405">405</span>
<span id="L406" rel="#L406">406</span>
<span id="L407" rel="#L407">407</span>
<span id="L408" rel="#L408">408</span>
<span id="L409" rel="#L409">409</span>
<span id="L410" rel="#L410">410</span>
<span id="L411" rel="#L411">411</span>
<span id="L412" rel="#L412">412</span>
<span id="L413" rel="#L413">413</span>
<span id="L414" rel="#L414">414</span>
<span id="L415" rel="#L415">415</span>
<span id="L416" rel="#L416">416</span>
<span id="L417" rel="#L417">417</span>
<span id="L418" rel="#L418">418</span>
<span id="L419" rel="#L419">419</span>
<span id="L420" rel="#L420">420</span>
<span id="L421" rel="#L421">421</span>
<span id="L422" rel="#L422">422</span>
<span id="L423" rel="#L423">423</span>
<span id="L424" rel="#L424">424</span>
<span id="L425" rel="#L425">425</span>
<span id="L426" rel="#L426">426</span>
<span id="L427" rel="#L427">427</span>
<span id="L428" rel="#L428">428</span>
<span id="L429" rel="#L429">429</span>
<span id="L430" rel="#L430">430</span>
<span id="L431" rel="#L431">431</span>
<span id="L432" rel="#L432">432</span>
<span id="L433" rel="#L433">433</span>
<span id="L434" rel="#L434">434</span>
<span id="L435" rel="#L435">435</span>
<span id="L436" rel="#L436">436</span>
<span id="L437" rel="#L437">437</span>
<span id="L438" rel="#L438">438</span>
<span id="L439" rel="#L439">439</span>
<span id="L440" rel="#L440">440</span>
<span id="L441" rel="#L441">441</span>
<span id="L442" rel="#L442">442</span>
<span id="L443" rel="#L443">443</span>
<span id="L444" rel="#L444">444</span>
<span id="L445" rel="#L445">445</span>
<span id="L446" rel="#L446">446</span>
<span id="L447" rel="#L447">447</span>
<span id="L448" rel="#L448">448</span>
<span id="L449" rel="#L449">449</span>
<span id="L450" rel="#L450">450</span>
<span id="L451" rel="#L451">451</span>
<span id="L452" rel="#L452">452</span>
<span id="L453" rel="#L453">453</span>
<span id="L454" rel="#L454">454</span>
<span id="L455" rel="#L455">455</span>
<span id="L456" rel="#L456">456</span>
<span id="L457" rel="#L457">457</span>
<span id="L458" rel="#L458">458</span>
<span id="L459" rel="#L459">459</span>
<span id="L460" rel="#L460">460</span>
<span id="L461" rel="#L461">461</span>
<span id="L462" rel="#L462">462</span>
<span id="L463" rel="#L463">463</span>
<span id="L464" rel="#L464">464</span>
<span id="L465" rel="#L465">465</span>
<span id="L466" rel="#L466">466</span>
<span id="L467" rel="#L467">467</span>
<span id="L468" rel="#L468">468</span>
<span id="L469" rel="#L469">469</span>
<span id="L470" rel="#L470">470</span>
<span id="L471" rel="#L471">471</span>
<span id="L472" rel="#L472">472</span>
<span id="L473" rel="#L473">473</span>
<span id="L474" rel="#L474">474</span>
<span id="L475" rel="#L475">475</span>
<span id="L476" rel="#L476">476</span>
<span id="L477" rel="#L477">477</span>
<span id="L478" rel="#L478">478</span>
<span id="L479" rel="#L479">479</span>
<span id="L480" rel="#L480">480</span>
<span id="L481" rel="#L481">481</span>
<span id="L482" rel="#L482">482</span>
<span id="L483" rel="#L483">483</span>
<span id="L484" rel="#L484">484</span>
<span id="L485" rel="#L485">485</span>
<span id="L486" rel="#L486">486</span>
<span id="L487" rel="#L487">487</span>
<span id="L488" rel="#L488">488</span>
<span id="L489" rel="#L489">489</span>
<span id="L490" rel="#L490">490</span>
<span id="L491" rel="#L491">491</span>
<span id="L492" rel="#L492">492</span>
<span id="L493" rel="#L493">493</span>
<span id="L494" rel="#L494">494</span>
<span id="L495" rel="#L495">495</span>
<span id="L496" rel="#L496">496</span>
<span id="L497" rel="#L497">497</span>
<span id="L498" rel="#L498">498</span>
<span id="L499" rel="#L499">499</span>
<span id="L500" rel="#L500">500</span>
<span id="L501" rel="#L501">501</span>
<span id="L502" rel="#L502">502</span>
<span id="L503" rel="#L503">503</span>
<span id="L504" rel="#L504">504</span>
<span id="L505" rel="#L505">505</span>
<span id="L506" rel="#L506">506</span>
<span id="L507" rel="#L507">507</span>
<span id="L508" rel="#L508">508</span>
<span id="L509" rel="#L509">509</span>
<span id="L510" rel="#L510">510</span>
<span id="L511" rel="#L511">511</span>
<span id="L512" rel="#L512">512</span>
<span id="L513" rel="#L513">513</span>
<span id="L514" rel="#L514">514</span>
<span id="L515" rel="#L515">515</span>
<span id="L516" rel="#L516">516</span>
<span id="L517" rel="#L517">517</span>
<span id="L518" rel="#L518">518</span>
<span id="L519" rel="#L519">519</span>
<span id="L520" rel="#L520">520</span>
<span id="L521" rel="#L521">521</span>
<span id="L522" rel="#L522">522</span>
<span id="L523" rel="#L523">523</span>
<span id="L524" rel="#L524">524</span>
<span id="L525" rel="#L525">525</span>
<span id="L526" rel="#L526">526</span>
<span id="L527" rel="#L527">527</span>
<span id="L528" rel="#L528">528</span>
<span id="L529" rel="#L529">529</span>
<span id="L530" rel="#L530">530</span>
<span id="L531" rel="#L531">531</span>
<span id="L532" rel="#L532">532</span>
<span id="L533" rel="#L533">533</span>
<span id="L534" rel="#L534">534</span>
<span id="L535" rel="#L535">535</span>
<span id="L536" rel="#L536">536</span>
<span id="L537" rel="#L537">537</span>
<span id="L538" rel="#L538">538</span>
<span id="L539" rel="#L539">539</span>
<span id="L540" rel="#L540">540</span>
<span id="L541" rel="#L541">541</span>
<span id="L542" rel="#L542">542</span>
<span id="L543" rel="#L543">543</span>
<span id="L544" rel="#L544">544</span>
<span id="L545" rel="#L545">545</span>
<span id="L546" rel="#L546">546</span>
<span id="L547" rel="#L547">547</span>
<span id="L548" rel="#L548">548</span>
<span id="L549" rel="#L549">549</span>
<span id="L550" rel="#L550">550</span>
<span id="L551" rel="#L551">551</span>
<span id="L552" rel="#L552">552</span>
<span id="L553" rel="#L553">553</span>
<span id="L554" rel="#L554">554</span>
<span id="L555" rel="#L555">555</span>
<span id="L556" rel="#L556">556</span>
<span id="L557" rel="#L557">557</span>
<span id="L558" rel="#L558">558</span>
<span id="L559" rel="#L559">559</span>
<span id="L560" rel="#L560">560</span>
<span id="L561" rel="#L561">561</span>
<span id="L562" rel="#L562">562</span>
<span id="L563" rel="#L563">563</span>
<span id="L564" rel="#L564">564</span>
<span id="L565" rel="#L565">565</span>
<span id="L566" rel="#L566">566</span>
<span id="L567" rel="#L567">567</span>
<span id="L568" rel="#L568">568</span>
<span id="L569" rel="#L569">569</span>
<span id="L570" rel="#L570">570</span>
<span id="L571" rel="#L571">571</span>
<span id="L572" rel="#L572">572</span>
<span id="L573" rel="#L573">573</span>
<span id="L574" rel="#L574">574</span>
<span id="L575" rel="#L575">575</span>
<span id="L576" rel="#L576">576</span>
<span id="L577" rel="#L577">577</span>
<span id="L578" rel="#L578">578</span>
<span id="L579" rel="#L579">579</span>
<span id="L580" rel="#L580">580</span>
<span id="L581" rel="#L581">581</span>
<span id="L582" rel="#L582">582</span>
<span id="L583" rel="#L583">583</span>
<span id="L584" rel="#L584">584</span>
<span id="L585" rel="#L585">585</span>
<span id="L586" rel="#L586">586</span>
<span id="L587" rel="#L587">587</span>
<span id="L588" rel="#L588">588</span>
<span id="L589" rel="#L589">589</span>
<span id="L590" rel="#L590">590</span>
<span id="L591" rel="#L591">591</span>
<span id="L592" rel="#L592">592</span>
<span id="L593" rel="#L593">593</span>
<span id="L594" rel="#L594">594</span>
<span id="L595" rel="#L595">595</span>
<span id="L596" rel="#L596">596</span>
<span id="L597" rel="#L597">597</span>
<span id="L598" rel="#L598">598</span>
<span id="L599" rel="#L599">599</span>
<span id="L600" rel="#L600">600</span>
<span id="L601" rel="#L601">601</span>
<span id="L602" rel="#L602">602</span>
<span id="L603" rel="#L603">603</span>
<span id="L604" rel="#L604">604</span>
<span id="L605" rel="#L605">605</span>
<span id="L606" rel="#L606">606</span>
<span id="L607" rel="#L607">607</span>
<span id="L608" rel="#L608">608</span>
<span id="L609" rel="#L609">609</span>
<span id="L610" rel="#L610">610</span>
<span id="L611" rel="#L611">611</span>
<span id="L612" rel="#L612">612</span>
<span id="L613" rel="#L613">613</span>
<span id="L614" rel="#L614">614</span>
<span id="L615" rel="#L615">615</span>
<span id="L616" rel="#L616">616</span>
<span id="L617" rel="#L617">617</span>
<span id="L618" rel="#L618">618</span>
<span id="L619" rel="#L619">619</span>
<span id="L620" rel="#L620">620</span>
<span id="L621" rel="#L621">621</span>
<span id="L622" rel="#L622">622</span>
<span id="L623" rel="#L623">623</span>
<span id="L624" rel="#L624">624</span>
<span id="L625" rel="#L625">625</span>
<span id="L626" rel="#L626">626</span>
<span id="L627" rel="#L627">627</span>
<span id="L628" rel="#L628">628</span>
<span id="L629" rel="#L629">629</span>
<span id="L630" rel="#L630">630</span>
<span id="L631" rel="#L631">631</span>
<span id="L632" rel="#L632">632</span>
<span id="L633" rel="#L633">633</span>
<span id="L634" rel="#L634">634</span>
<span id="L635" rel="#L635">635</span>
<span id="L636" rel="#L636">636</span>
<span id="L637" rel="#L637">637</span>
<span id="L638" rel="#L638">638</span>
<span id="L639" rel="#L639">639</span>
<span id="L640" rel="#L640">640</span>
<span id="L641" rel="#L641">641</span>
<span id="L642" rel="#L642">642</span>
<span id="L643" rel="#L643">643</span>
<span id="L644" rel="#L644">644</span>
<span id="L645" rel="#L645">645</span>
<span id="L646" rel="#L646">646</span>
<span id="L647" rel="#L647">647</span>
<span id="L648" rel="#L648">648</span>
<span id="L649" rel="#L649">649</span>
<span id="L650" rel="#L650">650</span>
<span id="L651" rel="#L651">651</span>
<span id="L652" rel="#L652">652</span>
<span id="L653" rel="#L653">653</span>
<span id="L654" rel="#L654">654</span>
<span id="L655" rel="#L655">655</span>
<span id="L656" rel="#L656">656</span>
<span id="L657" rel="#L657">657</span>
<span id="L658" rel="#L658">658</span>
<span id="L659" rel="#L659">659</span>
<span id="L660" rel="#L660">660</span>
<span id="L661" rel="#L661">661</span>
<span id="L662" rel="#L662">662</span>
<span id="L663" rel="#L663">663</span>
<span id="L664" rel="#L664">664</span>
<span id="L665" rel="#L665">665</span>
<span id="L666" rel="#L666">666</span>
<span id="L667" rel="#L667">667</span>
<span id="L668" rel="#L668">668</span>
<span id="L669" rel="#L669">669</span>
<span id="L670" rel="#L670">670</span>
<span id="L671" rel="#L671">671</span>
<span id="L672" rel="#L672">672</span>
<span id="L673" rel="#L673">673</span>
<span id="L674" rel="#L674">674</span>
<span id="L675" rel="#L675">675</span>
<span id="L676" rel="#L676">676</span>
<span id="L677" rel="#L677">677</span>
<span id="L678" rel="#L678">678</span>
<span id="L679" rel="#L679">679</span>
<span id="L680" rel="#L680">680</span>
<span id="L681" rel="#L681">681</span>
<span id="L682" rel="#L682">682</span>
<span id="L683" rel="#L683">683</span>
<span id="L684" rel="#L684">684</span>
<span id="L685" rel="#L685">685</span>
<span id="L686" rel="#L686">686</span>
<span id="L687" rel="#L687">687</span>
<span id="L688" rel="#L688">688</span>
<span id="L689" rel="#L689">689</span>
<span id="L690" rel="#L690">690</span>
<span id="L691" rel="#L691">691</span>
<span id="L692" rel="#L692">692</span>
<span id="L693" rel="#L693">693</span>
<span id="L694" rel="#L694">694</span>
<span id="L695" rel="#L695">695</span>
<span id="L696" rel="#L696">696</span>
<span id="L697" rel="#L697">697</span>
<span id="L698" rel="#L698">698</span>
<span id="L699" rel="#L699">699</span>
<span id="L700" rel="#L700">700</span>
<span id="L701" rel="#L701">701</span>
<span id="L702" rel="#L702">702</span>
<span id="L703" rel="#L703">703</span>
<span id="L704" rel="#L704">704</span>
<span id="L705" rel="#L705">705</span>
<span id="L706" rel="#L706">706</span>
<span id="L707" rel="#L707">707</span>
<span id="L708" rel="#L708">708</span>
<span id="L709" rel="#L709">709</span>
<span id="L710" rel="#L710">710</span>
<span id="L711" rel="#L711">711</span>
<span id="L712" rel="#L712">712</span>
<span id="L713" rel="#L713">713</span>
<span id="L714" rel="#L714">714</span>
<span id="L715" rel="#L715">715</span>
<span id="L716" rel="#L716">716</span>
<span id="L717" rel="#L717">717</span>
<span id="L718" rel="#L718">718</span>
<span id="L719" rel="#L719">719</span>
<span id="L720" rel="#L720">720</span>
<span id="L721" rel="#L721">721</span>
<span id="L722" rel="#L722">722</span>
<span id="L723" rel="#L723">723</span>
<span id="L724" rel="#L724">724</span>
<span id="L725" rel="#L725">725</span>
<span id="L726" rel="#L726">726</span>
<span id="L727" rel="#L727">727</span>
<span id="L728" rel="#L728">728</span>
<span id="L729" rel="#L729">729</span>
<span id="L730" rel="#L730">730</span>
<span id="L731" rel="#L731">731</span>
<span id="L732" rel="#L732">732</span>
<span id="L733" rel="#L733">733</span>
<span id="L734" rel="#L734">734</span>
<span id="L735" rel="#L735">735</span>
<span id="L736" rel="#L736">736</span>
<span id="L737" rel="#L737">737</span>
<span id="L738" rel="#L738">738</span>
<span id="L739" rel="#L739">739</span>
<span id="L740" rel="#L740">740</span>
<span id="L741" rel="#L741">741</span>
<span id="L742" rel="#L742">742</span>
<span id="L743" rel="#L743">743</span>
<span id="L744" rel="#L744">744</span>
<span id="L745" rel="#L745">745</span>
<span id="L746" rel="#L746">746</span>
<span id="L747" rel="#L747">747</span>
<span id="L748" rel="#L748">748</span>
<span id="L749" rel="#L749">749</span>
<span id="L750" rel="#L750">750</span>
<span id="L751" rel="#L751">751</span>
<span id="L752" rel="#L752">752</span>
<span id="L753" rel="#L753">753</span>
<span id="L754" rel="#L754">754</span>
<span id="L755" rel="#L755">755</span>
<span id="L756" rel="#L756">756</span>
<span id="L757" rel="#L757">757</span>
<span id="L758" rel="#L758">758</span>
<span id="L759" rel="#L759">759</span>
<span id="L760" rel="#L760">760</span>
<span id="L761" rel="#L761">761</span>
<span id="L762" rel="#L762">762</span>
<span id="L763" rel="#L763">763</span>
<span id="L764" rel="#L764">764</span>
<span id="L765" rel="#L765">765</span>
<span id="L766" rel="#L766">766</span>
<span id="L767" rel="#L767">767</span>
<span id="L768" rel="#L768">768</span>
<span id="L769" rel="#L769">769</span>
<span id="L770" rel="#L770">770</span>
<span id="L771" rel="#L771">771</span>
<span id="L772" rel="#L772">772</span>
<span id="L773" rel="#L773">773</span>
<span id="L774" rel="#L774">774</span>
<span id="L775" rel="#L775">775</span>
<span id="L776" rel="#L776">776</span>
<span id="L777" rel="#L777">777</span>
<span id="L778" rel="#L778">778</span>
<span id="L779" rel="#L779">779</span>
<span id="L780" rel="#L780">780</span>
<span id="L781" rel="#L781">781</span>
<span id="L782" rel="#L782">782</span>
<span id="L783" rel="#L783">783</span>
<span id="L784" rel="#L784">784</span>
<span id="L785" rel="#L785">785</span>
<span id="L786" rel="#L786">786</span>
<span id="L787" rel="#L787">787</span>
<span id="L788" rel="#L788">788</span>
<span id="L789" rel="#L789">789</span>
<span id="L790" rel="#L790">790</span>
<span id="L791" rel="#L791">791</span>
<span id="L792" rel="#L792">792</span>
<span id="L793" rel="#L793">793</span>
<span id="L794" rel="#L794">794</span>
<span id="L795" rel="#L795">795</span>
<span id="L796" rel="#L796">796</span>
<span id="L797" rel="#L797">797</span>
<span id="L798" rel="#L798">798</span>
<span id="L799" rel="#L799">799</span>
<span id="L800" rel="#L800">800</span>
<span id="L801" rel="#L801">801</span>
<span id="L802" rel="#L802">802</span>
<span id="L803" rel="#L803">803</span>
<span id="L804" rel="#L804">804</span>
<span id="L805" rel="#L805">805</span>
<span id="L806" rel="#L806">806</span>
<span id="L807" rel="#L807">807</span>
<span id="L808" rel="#L808">808</span>
<span id="L809" rel="#L809">809</span>
<span id="L810" rel="#L810">810</span>
<span id="L811" rel="#L811">811</span>
<span id="L812" rel="#L812">812</span>
<span id="L813" rel="#L813">813</span>
<span id="L814" rel="#L814">814</span>
</pre>
          </td>
          <td width="100%">
            
              
                <div class="highlight"><pre><div class='line' id='LC1'><span class="cp">&lt;?php</span> <span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;SYSPATH&#39;</span><span class="p">)</span> <span class="k">or</span> <span class="k">die</span><span class="p">(</span><span class="s1">&#39;No direct access allowed.&#39;</span><span class="p">);</span></div><div class='line' id='LC2'><br/></div><div class='line' id='LC3'><span class="sd">/**</span></div><div class='line' id='LC4'><span class="sd"> * User controller: user administration, also user accounts/profiles.</span></div><div class='line' id='LC5'><span class="sd"> *</span></div><div class='line' id='LC6'><span class="sd"> * @author Mikito Takada</span></div><div class='line' id='LC7'><span class="sd"> * @package default</span></div><div class='line' id='LC8'><span class="sd"> * @version 1.0</span></div><div class='line' id='LC9'><span class="sd"> */</span></div><div class='line' id='LC10'><br/></div><div class='line' id='LC11'><span class="k">class</span> <span class="nc">Controller_Useradmin_User</span> <span class="k">extends</span> <span class="nx">Controller_App</span> <span class="p">{</span></div><div class='line' id='LC12'><br/></div><div class='line' id='LC13'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC14'><span class="sd">    * @var string Filename of the template file.</span></div><div class='line' id='LC15'><span class="sd">    */</span></div><div class='line' id='LC16'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$template</span> <span class="o">=</span> <span class="s1">&#39;template/useradmin&#39;</span><span class="p">;</span></div><div class='line' id='LC17'><br/></div><div class='line' id='LC18'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC19'><span class="sd">    * Controls access for the whole controller, if not set to FALSE we will only allow user roles specified.</span></div><div class='line' id='LC20'><span class="sd">    *</span></div><div class='line' id='LC21'><span class="sd">    * See Controller_App for how this implemented.</span></div><div class='line' id='LC22'><span class="sd">    *</span></div><div class='line' id='LC23'><span class="sd">    * Can be set to a string or an array, for example array(&#39;login&#39;, &#39;admin&#39;) or &#39;login&#39;</span></div><div class='line' id='LC24'><span class="sd">    */</span></div><div class='line' id='LC25'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$auth_required</span> <span class="o">=</span> <span class="k">FALSE</span><span class="p">;</span></div><div class='line' id='LC26'><br/></div><div class='line' id='LC27'>&nbsp;&nbsp;&nbsp;<span class="sd">/** Controls access for separate actions</span></div><div class='line' id='LC28'><span class="sd">    *</span></div><div class='line' id='LC29'><span class="sd">    *  See Controller_App for how this implemented.</span></div><div class='line' id='LC30'><span class="sd">    *</span></div><div class='line' id='LC31'><span class="sd">    *  Examples:</span></div><div class='line' id='LC32'><span class="sd">    * &#39;adminpanel&#39; =&gt; &#39;admin&#39; will only allow users with the role admin to access action_adminpanel</span></div><div class='line' id='LC33'><span class="sd">    * &#39;moderatorpanel&#39; =&gt; array(&#39;login&#39;, &#39;moderator&#39;) will only allow users with the roles login and moderator to access action_moderatorpanel</span></div><div class='line' id='LC34'><span class="sd">    */</span></div><div class='line' id='LC35'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$secure_actions</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC36'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// user actions</span></div><div class='line' id='LC37'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;index&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;login&#39;</span><span class="p">,</span></div><div class='line' id='LC38'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;profile&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;login&#39;</span><span class="p">,</span></div><div class='line' id='LC39'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;profile_edit&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;login&#39;</span><span class="p">,</span></div><div class='line' id='LC40'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;unregister&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;login&#39;</span><span class="p">,</span></div><div class='line' id='LC41'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;change_password&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;login&#39;</span><span class="p">,</span></div><div class='line' id='LC42'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// the others are public (forgot, login, register, reset, noaccess)</span></div><div class='line' id='LC43'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// logout is also public to avoid confusion (e.g. easier to specify and test post-logout page)</span></div><div class='line' id='LC44'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC45'><br/></div><div class='line' id='LC46'>&nbsp;&nbsp;&nbsp;<span class="c1">// USER SELF-MANAGEMENT</span></div><div class='line' id='LC47'><br/></div><div class='line' id='LC48'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC49'><span class="sd">    * View: Redirect admins to admin index, users to user profile.</span></div><div class='line' id='LC50'><span class="sd">    */</span></div><div class='line' id='LC51'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">action_index</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC52'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// if the user has the admin role, redirect to admin_user controller</span></div><div class='line' id='LC53'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logged_in</span><span class="p">(</span><span class="s1">&#39;admin&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC54'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;admin_user/index&#39;</span><span class="p">);</span></div><div class='line' id='LC55'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC56'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC57'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC58'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC59'><br/></div><div class='line' id='LC60'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC61'><span class="sd">    * View: Access not allowed.</span></div><div class='line' id='LC62'><span class="sd">    */</span></div><div class='line' id='LC63'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">action_noaccess</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC64'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// set the template title (see Controller_App for implementation)</span></div><div class='line' id='LC65'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">title</span> <span class="o">=</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Access not allowed&#39;</span><span class="p">);</span></div><div class='line' id='LC66'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nx">View</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user/noaccess&#39;</span><span class="p">);</span></div><div class='line' id='LC67'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC68'><br/></div><div class='line' id='LC69'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC70'><span class="sd">    * View: User account information</span></div><div class='line' id='LC71'><span class="sd">    */</span></div><div class='line' id='LC72'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">action_profile</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC73'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// set the template title (see Controller_App for implementation)</span></div><div class='line' id='LC74'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">title</span> <span class="o">=</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;User profile&#39;</span><span class="p">);</span></div><div class='line' id='LC75'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logged_in</span><span class="p">()</span> <span class="o">==</span> <span class="k">false</span> <span class="p">){</span></div><div class='line' id='LC76'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// No user is currently logged in</span></div><div class='line' id='LC77'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/login&#39;</span><span class="p">);</span></div><div class='line' id='LC78'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC79'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nx">View</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC80'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// retrieve the current user and set the view variable accordingly</span></div><div class='line' id='LC81'><span class="c1">//die(var_dump(Auth::instance()-&gt;get_user()));</span></div><div class='line' id='LC82'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;user&#39;</span><span class="p">,</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">get_user</span><span class="p">()</span> <span class="p">);</span></div><div class='line' id='LC83'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC84'><br/></div><div class='line' id='LC85'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC86'><span class="sd">    * View: Profile editor</span></div><div class='line' id='LC87'><span class="sd">    */</span></div><div class='line' id='LC88'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">action_profile_edit</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC89'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// set the template title (see Controller_App for implementation)</span></div><div class='line' id='LC90'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">title</span> <span class="o">=</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Edit user profile&#39;</span><span class="p">);</span></div><div class='line' id='LC91'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span> <span class="o">=</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">get_user</span><span class="p">();</span> </div><div class='line' id='LC92'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$username</span> <span class="o">=</span> <span class="nv">$user</span><span class="o">-&gt;</span><span class="na">username</span><span class="p">;</span></div><div class='line' id='LC93'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// load the content from view</span></div><div class='line' id='LC94'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span> <span class="o">=</span> <span class="nx">View</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user/profile_edit&#39;</span><span class="p">);</span></div><div class='line' id='LC95'><br/></div><div class='line' id='LC96'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// save the data</span></div><div class='line' id='LC97'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">)</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC98'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">])</span> <span class="o">||</span> <span class="k">empty</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;password_confirm&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC99'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// force unsetting the password! Otherwise Kohana3 will automatically hash the empty string - preventing logins</span></div><div class='line' id='LC100'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">unset</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">],</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;password_confirm&#39;</span><span class="p">]);</span></div><div class='line' id='LC101'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC102'><br/></div><div class='line' id='LC103'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC104'><br/></div><div class='line' id='LC105'>		<span class="nv">$model_user</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Model_User</span><span class="p">();</span></div><div class='line' id='LC106'><br/></div><div class='line' id='LC107'>		<span class="k">if</span><span class="p">(</span><span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">get_user</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">email</span> <span class="o">===</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">])</span></div><div class='line' id='LC108'>		<span class="p">{</span></div><div class='line' id='LC109'>			<span class="nv">$send_email</span> <span class="o">=</span> <span class="k">FALSE</span><span class="p">;</span></div><div class='line' id='LC110'>			<span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;email_code&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;true&#39;</span><span class="p">;</span></div><div class='line' id='LC111'>		<span class="p">}</span></div><div class='line' id='LC112'>		<span class="k">else</span></div><div class='line' id='LC113'>		<span class="p">{</span></div><div class='line' id='LC114'>			<span class="nv">$send_email</span> <span class="o">=</span> <span class="k">TRUE</span><span class="p">;</span></div><div class='line' id='LC115'>			<span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;email_code&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">hash</span><span class="p">(</span><span class="nb">date</span><span class="p">(</span><span class="s1">&#39;YmdHis&#39;</span><span class="p">,</span> <span class="nb">time</span><span class="p">()));</span></div><div class='line' id='LC116'>		<span class="p">}</span></div><div class='line' id='LC117'><br/></div><div class='line' id='LC118'>		<span class="nv">$model_user</span><span class="o">-&gt;</span><span class="na">update_user</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">);</span></div><div class='line' id='LC119'><br/></div><div class='line' id='LC120'>		<span class="k">if</span><span class="p">(</span><span class="nv">$send_email</span><span class="p">)</span></div><div class='line' id='LC121'>		<span class="p">{</span></div><div class='line' id='LC122'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">send_confirmation_email</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">);</span></div><div class='line' id='LC123'>		<span class="p">}</span></div><div class='line' id='LC124'><br/></div><div class='line' id='LC125'>		<span class="c1">// message: save success</span></div><div class='line' id='LC126'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;success&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Values saved.&#39;</span><span class="p">));</span></div><div class='line' id='LC127'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// redirect and exit</span></div><div class='line' id='LC128'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC129'>		<span class="c1">//throw new Exception($result);</span></div><div class='line' id='LC130'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC131'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">Validation_Exception</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC132'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Get errors for display in view</span></div><div class='line' id='LC133'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Note how the first param is the path to the message file (e.g. /messages/register.php)</span></div><div class='line' id='LC134'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Error: Values could not be saved.&#39;</span><span class="p">));</span></div><div class='line' id='LC135'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$errors</span> <span class="o">=</span> <span class="nv">$e</span><span class="o">-&gt;</span><span class="na">errors</span><span class="p">(</span><span class="s1">&#39;register&#39;</span><span class="p">);</span></div><div class='line' id='LC136'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$errors</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nv">$errors</span><span class="p">,</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$errors</span><span class="p">[</span><span class="s1">&#39;_external&#39;</span><span class="p">])</span> <span class="o">?</span> <span class="nv">$errors</span><span class="p">[</span><span class="s1">&#39;_external&#39;</span><span class="p">]</span> <span class="o">:</span> <span class="k">array</span><span class="p">()));</span></div><div class='line' id='LC137'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;errors&#39;</span><span class="p">,</span> <span class="nv">$errors</span><span class="p">);</span></div><div class='line' id='LC138'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Pass on the old form values</span></div><div class='line' id='LC139'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span><span class="o">-&gt;</span><span class="na">password</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC140'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;data&#39;</span><span class="p">,</span> <span class="nv">$user</span><span class="p">);</span></div><div class='line' id='LC141'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC142'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC143'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// load the information for viewing</span></div><div class='line' id='LC144'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;data&#39;</span><span class="p">,</span> <span class="p">(</span><span class="k">array</span><span class="p">)</span> <span class="nv">$user</span><span class="p">);</span></div><div class='line' id='LC145'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC146'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// retrieve roles into array</span></div><div class='line' id='LC147'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// $roles = array();</span></div><div class='line' id='LC148'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="cm">/*foreach($user-&gt;roles-&gt;find_all() as $role) {</span></div><div class='line' id='LC149'><span class="cm">          $roles[$role-&gt;name] = $role-&gt;description;</span></div><div class='line' id='LC150'><span class="cm">       }*/</span></div><div class='line' id='LC151'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// $view-&gt;set(&#39;user_roles&#39;, $roles); </span></div><div class='line' id='LC152'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nv">$view</span><span class="p">;</span></div><div class='line' id='LC153'><br/></div><div class='line' id='LC154'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC155'><br/></div><div class='line' id='LC156'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC157'><span class="sd">    * Register a new user.</span></div><div class='line' id='LC158'><span class="sd">    */</span></div><div class='line' id='LC159'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">action_register</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC160'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Load reCaptcha if needed</span></div><div class='line' id='LC161'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">Kohana</span><span class="o">::</span><span class="na">config</span><span class="p">(</span><span class="s1">&#39;useradmin&#39;</span><span class="p">)</span><span class="o">-&gt;</span><span class="na">captcha</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC162'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">include</span> <span class="nx">Kohana</span><span class="o">::</span><span class="na">find_file</span><span class="p">(</span><span class="s1">&#39;vendor&#39;</span><span class="p">,</span> <span class="s1">&#39;recaptcha/recaptchalib&#39;</span><span class="p">);</span></div><div class='line' id='LC163'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$recaptcha_config</span> <span class="o">=</span> <span class="nx">Kohana</span><span class="o">::</span><span class="na">config</span><span class="p">(</span><span class="s1">&#39;recaptcha&#39;</span><span class="p">);</span></div><div class='line' id='LC164'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$recaptcha_error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC165'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC166'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// set the template title (see Controller_App for implementation)</span></div><div class='line' id='LC167'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">title</span> <span class="o">=</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;User registration&#39;</span><span class="p">);</span></div><div class='line' id='LC168'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// If user already signed-in</span></div><div class='line' id='LC169'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logged_in</span><span class="p">()</span> <span class="o">!=</span> <span class="k">false</span><span class="p">){</span></div><div class='line' id='LC170'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// redirect to the user account</span></div><div class='line' id='LC171'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC172'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC173'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Load the view</span></div><div class='line' id='LC174'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span> <span class="o">=</span> <span class="nx">View</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user/register&#39;</span><span class="p">);</span></div><div class='line' id='LC175'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// If there is a post and $_POST is not empty</span></div><div class='line' id='LC176'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$_POST</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC177'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// optional checks (e.g. reCaptcha or some other additional check)</span></div><div class='line' id='LC178'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$optional_checks</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC179'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// if configured to use captcha, check the reCaptcha result</span></div><div class='line' id='LC180'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">Kohana</span><span class="o">::</span><span class="na">config</span><span class="p">(</span><span class="s1">&#39;useradmin&#39;</span><span class="p">)</span><span class="o">-&gt;</span><span class="na">captcha</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC181'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$recaptcha_resp</span> <span class="o">=</span> <span class="nx">recaptcha_check_answer</span><span class="p">(</span><span class="nv">$recaptcha_config</span><span class="p">[</span><span class="s1">&#39;privatekey&#39;</span><span class="p">],</span></div><div class='line' id='LC182'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;REMOTE_ADDR&#39;</span><span class="p">],</span></div><div class='line' id='LC183'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;recaptcha_challenge_field&#39;</span><span class="p">],</span></div><div class='line' id='LC184'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;recaptcha_response_field&#39;</span><span class="p">]);</span></div><div class='line' id='LC185'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$recaptcha_resp</span><span class="o">-&gt;</span><span class="na">is_valid</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC186'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$optional_checks</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC187'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$recaptcha_error</span> <span class="o">=</span> <span class="nv">$recaptcha_resp</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">;</span></div><div class='line' id='LC188'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;The captcha text is incorrect, please try again.&#39;</span><span class="p">));</span></div><div class='line' id='LC189'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC190'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC191'><br/></div><div class='line' id='LC192'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC193'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span> <span class="o">!</span> <span class="nv">$optional_checks</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC194'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//throw new ORM_Validation_Exception(&quot;Invalid option checks&quot;);</span></div><div class='line' id='LC195'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC196'><br/></div><div class='line' id='LC197'>	    <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;email_code&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">hash</span><span class="p">(</span><span class="nb">date</span><span class="p">(</span><span class="s1">&#39;YmdHis&#39;</span><span class="p">,</span> <span class="nb">time</span><span class="p">()));</span></div><div class='line' id='LC198'><br/></div><div class='line' id='LC199'>	    <span class="nv">$model_user</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Model_User</span><span class="p">;</span></div><div class='line' id='LC200'>	    <span class="nv">$model_user</span><span class="o">-&gt;</span><span class="na">create_user</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">);</span></div><div class='line' id='LC201'>	    <span class="c1">//Auth::instance()-&gt;register( $_POST );</span></div><div class='line' id='LC202'><br/></div><div class='line' id='LC203'>	    <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">send_confirmation_email</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">);</span> </div><div class='line' id='LC204'><br/></div><div class='line' id='LC205'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// sign the user in</span></div><div class='line' id='LC206'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">login</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;username&#39;</span><span class="p">],</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">]);</span></div><div class='line' id='LC207'><br/></div><div class='line' id='LC208'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// redirect to the user account</span></div><div class='line' id='LC209'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC210'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">Validation_Exception</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC211'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Get errors for display in view</span></div><div class='line' id='LC212'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Note how the first param is the path to the message file (e.g. /messages/register.php)</span></div><div class='line' id='LC213'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// $errors = $e-&gt;errors(&#39;register&#39;);</span></div><div class='line' id='LC214'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Move external errors to main array, for post helper compatibility</span></div><div class='line' id='LC215'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$errors</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nv">$errors</span><span class="p">,</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$errors</span><span class="p">[</span><span class="s1">&#39;_external&#39;</span><span class="p">])</span> <span class="o">?</span> <span class="nv">$errors</span><span class="p">[</span><span class="s1">&#39;_external&#39;</span><span class="p">]</span> <span class="o">:</span> <span class="k">array</span><span class="p">()));</span></div><div class='line' id='LC216'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;errors&#39;</span><span class="p">,</span> <span class="nv">$errors</span><span class="p">);</span></div><div class='line' id='LC217'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Pass on the old form values</span></div><div class='line' id='LC218'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;password_confirm&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC219'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;defaults&#39;</span><span class="p">,</span> <span class="nv">$_POST</span><span class="p">);</span></div><div class='line' id='LC220'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC221'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC222'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">Kohana</span><span class="o">::</span><span class="na">config</span><span class="p">(</span><span class="s1">&#39;useradmin&#39;</span><span class="p">)</span><span class="o">-&gt;</span><span class="na">activation_code</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC223'>	<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;activation_code_enabled&#39;</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC224'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC225'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">Kohana</span><span class="o">::</span><span class="na">config</span><span class="p">(</span><span class="s1">&#39;useradmin&#39;</span><span class="p">)</span><span class="o">-&gt;</span><span class="na">captcha</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC226'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;captcha_enabled&#39;</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC227'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;recaptcha_html&#39;</span><span class="p">,</span> <span class="nx">recaptcha_get_html</span><span class="p">(</span><span class="nv">$recaptcha_config</span><span class="p">[</span><span class="s1">&#39;publickey&#39;</span><span class="p">],</span> <span class="nv">$recaptcha_error</span><span class="p">));</span></div><div class='line' id='LC228'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC229'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nv">$view</span><span class="p">;</span></div><div class='line' id='LC230'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC231'><br/></div><div class='line' id='LC232'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC233'><span class="sd">    * Action to resend email</span></div><div class='line' id='LC234'><span class="sd">    */</span></div><div class='line' id='LC235'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">action_send_confirmation_email</span><span class="p">()</span></div><div class='line' id='LC236'>&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC237'>	<span class="c1">// set the template title (see Controller_App for implementation)</span></div><div class='line' id='LC238'>	<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">title</span> <span class="o">=</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Sending confirmation email&#39;</span><span class="p">);</span></div><div class='line' id='LC239'>	<span class="k">if</span> <span class="p">(</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logged_in</span><span class="p">()</span> <span class="o">==</span> <span class="k">false</span> <span class="p">)</span></div><div class='line' id='LC240'>	<span class="p">{</span></div><div class='line' id='LC241'>		<span class="c1">// No user is currently logged in</span></div><div class='line' id='LC242'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/login&#39;</span><span class="p">);</span></div><div class='line' id='LC243'>	<span class="p">}</span></div><div class='line' id='LC244'><br/></div><div class='line' id='LC245'>	<span class="k">if</span><span class="p">(</span><span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">get_user</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">email_verified</span> <span class="o">===</span> <span class="s1">&#39;true&#39;</span><span class="p">)</span></div><div class='line' id='LC246'>	<span class="p">{</span></div><div class='line' id='LC247'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC248'>	<span class="p">}</span></div><div class='line' id='LC249'><br/></div><div class='line' id='LC250'>	<span class="nv">$fields</span><span class="p">[</span><span class="s1">&#39;email_code&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">get_user</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">email_verified</span><span class="p">;</span></div><div class='line' id='LC251'>	<span class="nv">$fields</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">get_user</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">email</span><span class="p">;</span></div><div class='line' id='LC252'><br/></div><div class='line' id='LC253'>	<span class="k">try</span></div><div class='line' id='LC254'>	<span class="p">{</span></div><div class='line' id='LC255'>		<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">send_confirmation_email</span><span class="p">(</span><span class="nv">$fields</span><span class="p">))</span></div><div class='line' id='LC256'>		<span class="p">{</span></div><div class='line' id='LC257'>			<span class="k">throw</span> <span class="nx">Exception</span><span class="p">(</span><span class="nx">__</span><span class="p">(</span><span class="s1">&#39;The email could not be send. Try again later.&#39;</span><span class="p">));</span></div><div class='line' id='LC258'>		<span class="p">}</span></div><div class='line' id='LC259'>		<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;success&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;A new code was send to you.&#39;</span><span class="p">));</span></div><div class='line' id='LC260'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC261'>	<span class="p">}</span></div><div class='line' id='LC262'>	<span class="k">catch</span> <span class="p">(</span><span class="nx">Exception</span> <span class="nv">$e</span><span class="p">)</span></div><div class='line' id='LC263'>	<span class="p">{</span></div><div class='line' id='LC264'>		<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;The email could not be send. Try again later.&#39;</span><span class="p">));</span></div><div class='line' id='LC265'>		<span class="nx">Kohana</span><span class="o">::</span><span class="nv">$log</span><span class="o">-&gt;</span><span class="na">add</span><span class="p">(</span><span class="nx">Log</span><span class="o">::</span><span class="na">ERROR</span><span class="p">,</span> <span class="s1">&#39;Confirmation email could not be send.&#39;</span><span class="p">);</span></div><div class='line' id='LC266'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC267'>	<span class="p">}</span></div><div class='line' id='LC268'><br/></div><div class='line' id='LC269'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC270'><br/></div><div class='line' id='LC271'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC272'><span class="sd">    * Email confirmation</span></div><div class='line' id='LC273'><span class="sd">    */</span></div><div class='line' id='LC274'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">action_confirm_email</span><span class="p">(</span><span class="nv">$email_code</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC275'>	<span class="c1">// set the template title (see Controller_App for implementation)</span></div><div class='line' id='LC276'>	<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">title</span> <span class="o">=</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Account confirmation&#39;</span><span class="p">);</span></div><div class='line' id='LC277'>	<span class="k">if</span> <span class="p">(</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logged_in</span><span class="p">()</span> <span class="o">==</span> <span class="k">false</span> <span class="p">)</span></div><div class='line' id='LC278'>	<span class="p">{</span></div><div class='line' id='LC279'>		<span class="c1">// No user is currently logged in</span></div><div class='line' id='LC280'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/login&#39;</span><span class="p">);</span></div><div class='line' id='LC281'>	<span class="p">}</span></div><div class='line' id='LC282'><br/></div><div class='line' id='LC283'>	<span class="k">if</span><span class="p">(</span><span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">get_user</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">email_verified</span> <span class="o">===</span> <span class="s1">&#39;true&#39;</span><span class="p">)</span></div><div class='line' id='LC284'>	<span class="p">{</span></div><div class='line' id='LC285'>		<span class="c1">// This is for avoiding confusion on the part of the user</span></div><div class='line' id='LC286'>		<span class="c1">// Send this message to ind. to the user that they do not need to confirm the email anymore</span></div><div class='line' id='LC287'>		<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;success&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Success! Your email as been confirmed.&#39;</span><span class="p">));</span></div><div class='line' id='LC288'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC289'>	<span class="p">}</span></div><div class='line' id='LC290'><br/></div><div class='line' id='LC291'>	<span class="k">try</span></div><div class='line' id='LC292'>	<span class="p">{</span></div><div class='line' id='LC293'>		<span class="c1">// Get the model where the validation method is and the method for updating the status of the email_verified is</span></div><div class='line' id='LC294'>		<span class="nv">$model_user</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Model_User</span><span class="p">;</span></div><div class='line' id='LC295'>		<span class="c1">// Create an array for the Validation Class</span></div><div class='line' id='LC296'>		<span class="nv">$email_confirmation_code</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC297'>		<span class="nv">$email_confirmation_code</span><span class="p">[</span><span class="s1">&#39;email_confirmation_code&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$email_code</span><span class="p">;</span></div><div class='line' id='LC298'>		<span class="nx">Validation</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="nv">$email_confirmation_code</span><span class="p">)</span></div><div class='line' id='LC299'>			<span class="o">-&gt;</span><span class="na">rule</span><span class="p">(</span><span class="s1">&#39;email_confirmation_code&#39;</span><span class="p">,</span> <span class="s1">&#39;email_confirmation_code&#39;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="nv">$this</span><span class="p">,</span> <span class="s1">&#39;:field&#39;</span><span class="p">));</span></div><div class='line' id='LC300'>		<span class="c1">// Update email_verified</span></div><div class='line' id='LC301'>		<span class="nv">$model_user</span><span class="o">-&gt;</span><span class="na">update_email_confirmation</span><span class="p">();</span></div><div class='line' id='LC302'>		<span class="c1">// Send a message to the user that the code was accepted</span></div><div class='line' id='LC303'>		<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;success&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Success! Your email as been confirmed.&#39;</span><span class="p">));</span></div><div class='line' id='LC304'>		<span class="c1">// Redirect to the profile page where the message will be read by the user</span></div><div class='line' id='LC305'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC306'>	<span class="p">}</span></div><div class='line' id='LC307'>	<span class="k">catch</span> <span class="p">(</span><span class="nx">Validation_Exception</span> <span class="nv">$e</span><span class="p">)</span></div><div class='line' id='LC308'>	<span class="p">{</span></div><div class='line' id='LC309'>		<span class="c1">// Send an error message to the user</span></div><div class='line' id='LC310'>		<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;The code given was wrong or as expired.&#39;</span><span class="p">));</span></div><div class='line' id='LC311'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC312'>	<span class="p">}</span></div><div class='line' id='LC313'><br/></div><div class='line' id='LC314'>	<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nv">$view</span><span class="p">;</span></div><div class='line' id='LC315'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC316'><br/></div><div class='line' id='LC317'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC318'><span class="sd">    * Email confirmation sender</span></div><div class='line' id='LC319'><span class="sd">    *</span></div><div class='line' id='LC320'><span class="sd">    * @param Array Field Name</span></div><div class='line' id='LC321'><span class="sd">    * @return Bool</span></div><div class='line' id='LC322'><span class="sd">    */</span></div><div class='line' id='LC323'>&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">send_confirmation_email</span><span class="p">(</span><span class="nv">$fields</span><span class="p">)</span></div><div class='line' id='LC324'>&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC325'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">=</span> <span class="s2">&quot;Thank you so much for registering with :title!&lt;br&gt;</span><span class="se">\n\n</span><span class="s2">&quot;</span></div><div class='line' id='LC326'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">.</span><span class="s2">&quot;Please confirm your :title account by clicking this link:&lt;br&gt;</span><span class="se">\n\n</span><span class="s2">&quot;</span></div><div class='line' id='LC327'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">.</span><span class="s2">&quot;:email_code_address&lt;br&gt;</span><span class="se">\n\n</span><span class="s2">&quot;</span></div><div class='line' id='LC328'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">.</span><span class="s2">&quot;Once you confirm, you will have full access to :title and all future notifications will be sent to this email address.&lt;br&gt;</span><span class="se">\n\n</span><span class="s2">&quot;</span></div><div class='line' id='LC329'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">.</span><span class="s2">&quot;The :title Team&quot;</span><span class="p">;</span></div><div class='line' id='LC330'><br/></div><div class='line' id='LC331'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mailer</span> <span class="o">=</span> <span class="nx">Email</span><span class="o">::</span><span class="na">connect</span><span class="p">();</span></div><div class='line' id='LC332'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$to</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="nv">$fields</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">]);</span></div><div class='line' id='LC333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$from</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="nx">Kohana</span><span class="o">::</span><span class="na">config</span><span class="p">(</span><span class="s1">&#39;useradmin&#39;</span><span class="p">)</span><span class="o">-&gt;</span><span class="na">email_address</span><span class="p">);</span></div><div class='line' id='LC334'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$subject</span> <span class="o">=</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Confirm your subscription.&#39;</span><span class="p">);</span></div><div class='line' id='LC335'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">=</span> <span class="nx">__</span><span class="p">(</span><span class="nv">$message</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC336'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;:title&#39;</span>        <span class="o">=&gt;</span> <span class="nx">Kohana</span><span class="o">::</span><span class="na">config</span><span class="p">(</span><span class="s1">&#39;useradmin&#39;</span><span class="p">)</span><span class="o">-&gt;</span><span class="na">title</span><span class="p">,</span></div><div class='line' id='LC337'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;:email_code_address&#39;</span>  <span class="o">=&gt;</span> <span class="nx">HTML</span><span class="o">::</span><span class="na">anchor</span><span class="p">(</span><span class="s1">&#39;/user/confirm_email/&#39;</span><span class="o">.</span><span class="nv">$fields</span><span class="p">[</span><span class="s1">&#39;email_code&#39;</span><span class="p">],</span> <span class="nx">URL</span><span class="o">::</span><span class="na">base</span><span class="p">()</span><span class="o">.</span><span class="s1">&#39;user/confirm_email/&#39;</span><span class="o">.</span><span class="nv">$fields</span><span class="p">[</span><span class="s1">&#39;email_code&#39;</span><span class="p">]),</span></div><div class='line' id='LC338'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">));</span></div><div class='line' id='LC339'><br/></div><div class='line' id='LC340'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message_swift</span> <span class="o">=</span> <span class="nx">Swift_Message</span><span class="o">::</span><span class="na">newInstance</span><span class="p">(</span><span class="nv">$subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">,</span> <span class="s2">&quot;text/html&quot;</span><span class="p">)</span></div><div class='line' id='LC341'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">-&gt;</span><span class="na">setFrom</span><span class="p">(</span><span class="nv">$from</span><span class="p">)</span></div><div class='line' id='LC342'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">-&gt;</span><span class="na">setTo</span><span class="p">(</span><span class="nv">$to</span><span class="p">);</span></div><div class='line' id='LC343'><br/></div><div class='line' id='LC344'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$mailer</span><span class="o">-&gt;</span><span class="na">send</span><span class="p">(</span><span class="nv">$message_swift</span><span class="p">);</span></div><div class='line' id='LC345'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC346'><br/></div><div class='line' id='LC347'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC348'><span class="sd">    * Close the current user&#39;s account.</span></div><div class='line' id='LC349'><span class="sd">    */</span></div><div class='line' id='LC350'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">action_unregister</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC351'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// set the template title (see Controller_App for implementation)</span></div><div class='line' id='LC352'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">title</span> <span class="o">=</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Close user account&#39;</span><span class="p">);</span></div><div class='line' id='LC353'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logged_in</span><span class="p">()</span> <span class="o">==</span> <span class="k">false</span> <span class="p">){</span></div><div class='line' id='LC354'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// No user is currently logged in</span></div><div class='line' id='LC355'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/login&#39;</span><span class="p">);</span></div><div class='line' id='LC356'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC357'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// get the user id</span></div><div class='line' id='LC358'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$uuid</span> <span class="o">=</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">get_user</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">uuid</span><span class="p">;</span></div><div class='line' id='LC359'><br/></div><div class='line' id='LC360'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// check for confirmation</span></div><div class='line' id='LC361'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$uuid</span> <span class="o">&amp;&amp;</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;confirmation&#39;</span><span class="p">])</span> <span class="o">&amp;&amp;</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;confirmation&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="s1">&#39;Y&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC362'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logged_in</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC363'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Log the user out, their account will no longer exist</span></div><div class='line' id='LC364'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logout</span><span class="p">();</span></div><div class='line' id='LC365'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC366'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Delete the user</span></div><div class='line' id='LC367'>	 <span class="nv">$model_user</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Model_User</span><span class="p">();</span></div><div class='line' id='LC368'>	 <span class="nv">$model_user</span><span class="o">-&gt;</span><span class="na">delete_user</span><span class="p">(</span><span class="nv">$uuid</span><span class="p">);</span> </div><div class='line' id='LC369'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// message: save success</span></div><div class='line' id='LC370'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;success&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;User deleted.&#39;</span><span class="p">));</span></div><div class='line' id='LC371'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC372'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC373'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// display confirmation</span></div><div class='line' id='LC374'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nx">View</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user/unregister&#39;</span><span class="p">)</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;id&#39;</span><span class="p">,</span> <span class="nx">CASSANDRA</span><span class="o">::</span><span class="na">Util</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">import</span><span class="p">(</span><span class="nv">$uuid</span><span class="p">))</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;data&#39;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;username&#39;</span> <span class="o">=&gt;</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">get_user</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">username</span><span class="p">));</span></div><div class='line' id='LC375'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC376'><br/></div><div class='line' id='LC377'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC378'><span class="sd">    * View: Login form.</span></div><div class='line' id='LC379'><span class="sd">    */</span></div><div class='line' id='LC380'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">action_login</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC381'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// ajax login</span></div><div class='line' id='LC382'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">is_ajax</span><span class="p">()</span> <span class="o">&amp;&amp;</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;username&#39;</span><span class="p">],</span> <span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC383'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">auto_render</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC384'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">headers</span><span class="p">(</span><span class="s1">&#39;Content-Type&#39;</span><span class="p">,</span> <span class="s1">&#39;application/json&#39;</span><span class="p">);</span></div><div class='line' id='LC385'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logged_in</span><span class="p">()</span> <span class="o">!=</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC386'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span><span class="o">-&gt;</span><span class="na">status</span><span class="p">(</span><span class="mi">200</span><span class="p">);</span></div><div class='line' id='LC387'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">body</span><span class="p">(</span><span class="s1">&#39;{ &quot;success&quot;: &quot;true&quot; }&#39;</span><span class="p">);</span></div><div class='line' id='LC388'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC389'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC390'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">else</span> <span class="k">if</span><span class="p">(</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">login</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;username&#39;</span><span class="p">],</span> <span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">])</span> <span class="p">)</span></div><div class='line' id='LC391'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC392'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span><span class="o">-&gt;</span><span class="na">status</span><span class="p">(</span><span class="mi">200</span><span class="p">);</span></div><div class='line' id='LC393'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">body</span><span class="p">(</span><span class="s1">&#39;{ &quot;success&quot;: &quot;true&quot; }&#39;</span><span class="p">);</span></div><div class='line' id='LC394'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC395'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC396'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span><span class="o">-&gt;</span><span class="na">status</span><span class="p">(</span><span class="mi">500</span><span class="p">);</span></div><div class='line' id='LC397'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">body</span><span class="p">(</span><span class="s1">&#39;{ &quot;success&quot;: &quot;false&quot; }&#39;</span><span class="p">);</span></div><div class='line' id='LC398'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC399'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC400'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// set the template title (see Controller_App for implementation)</span></div><div class='line' id='LC401'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">title</span> <span class="o">=</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Login&#39;</span><span class="p">);</span></div><div class='line' id='LC402'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// If user already signed-in</span></div><div class='line' id='LC403'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logged_in</span><span class="p">()</span> <span class="o">!=</span> <span class="mi">0</span><span class="p">){</span>	</div><div class='line' id='LC404'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// redirect to the user account</span></div><div class='line' id='LC405'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC406'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC407'><span class="c1">//die(&#39;logged_in = FALSE&#39;);</span></div><div class='line' id='LC408'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span> <span class="o">=</span> <span class="nx">View</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user/login&#39;</span><span class="p">);</span></div><div class='line' id='LC409'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// If there is a post and $_POST is not empty</span></div><div class='line' id='LC410'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$_REQUEST</span> <span class="o">&amp;&amp;</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;username&#39;</span><span class="p">],</span> <span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC411'><br/></div><div class='line' id='LC412'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Check Auth if the post data validates using the rules setup in the user model</span></div><div class='line' id='LC413'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">login</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;username&#39;</span><span class="p">],</span> <span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">])</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC414'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// redirect to the user account</span></div><div class='line' id='LC415'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC416'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC417'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC418'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;username&#39;</span><span class="p">]);</span></div><div class='line' id='LC419'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Get errors for display in view</span></div><div class='line' id='LC420'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$validation</span> <span class="o">=</span> <span class="nx">Validation</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">)</span></div><div class='line' id='LC421'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">-&gt;</span><span class="na">rule</span><span class="p">(</span><span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="s1">&#39;not_empty&#39;</span><span class="p">)</span></div><div class='line' id='LC422'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">-&gt;</span><span class="na">rule</span><span class="p">(</span><span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="s1">&#39;min_length&#39;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;:value&#39;</span><span class="p">,</span> <span class="mi">1</span><span class="p">))</span></div><div class='line' id='LC423'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">-&gt;</span><span class="na">rule</span><span class="p">(</span><span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="s1">&#39;max_length&#39;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;:value&#39;</span><span class="p">,</span> <span class="mi">127</span><span class="p">))</span></div><div class='line' id='LC424'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">-&gt;</span><span class="na">rule</span><span class="p">(</span><span class="s1">&#39;password&#39;</span><span class="p">,</span> <span class="s1">&#39;not_empty&#39;</span><span class="p">);</span>             </div><div class='line' id='LC425'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$validation</span><span class="o">-&gt;</span><span class="na">check</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC426'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$validation</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">(</span><span class="s1">&#39;password&#39;</span><span class="p">,</span> <span class="s1">&#39;invalid&#39;</span><span class="p">);</span></div><div class='line' id='LC427'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC428'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;errors&#39;</span><span class="p">,</span> <span class="nv">$validation</span><span class="o">-&gt;</span><span class="na">errors</span><span class="p">(</span><span class="s1">&#39;login&#39;</span><span class="p">));</span>  </div><div class='line' id='LC429'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC430'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC431'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// allow setting the username as a get param</span></div><div class='line' id='LC432'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;username&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC433'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;username&#39;</span><span class="p">,</span> <span class="nx">Security</span><span class="o">::</span><span class="na">xss_clean</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;username&#39;</span><span class="p">]));</span></div><div class='line' id='LC434'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC435'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$providers</span> <span class="o">=</span> <span class="nx">Kohana</span><span class="o">::</span><span class="na">config</span><span class="p">(</span><span class="s1">&#39;useradmin.providers&#39;</span><span class="p">);</span></div><div class='line' id='LC436'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;facebook_enabled&#39;</span><span class="p">,</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$providers</span><span class="p">[</span><span class="s1">&#39;facebook&#39;</span><span class="p">])</span> <span class="o">?</span> <span class="nv">$providers</span><span class="p">[</span><span class="s1">&#39;facebook&#39;</span><span class="p">]</span> <span class="o">:</span> <span class="k">false</span><span class="p">);</span></div><div class='line' id='LC437'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nv">$view</span><span class="p">;</span></div><div class='line' id='LC438'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC439'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC440'><br/></div><div class='line' id='LC441'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC442'><span class="sd">    * Log the user out.</span></div><div class='line' id='LC443'><span class="sd">    */</span></div><div class='line' id='LC444'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">action_logout</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC445'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Sign out the user</span></div><div class='line' id='LC446'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logout</span><span class="p">();</span></div><div class='line' id='LC447'><br/></div><div class='line' id='LC448'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// redirect to the user account and then the signin page if logout worked as expected</span></div><div class='line' id='LC449'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC450'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC451'><br/></div><div class='line' id='LC452'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC453'><span class="sd">    * A basic implementation of the &quot;Forgot password&quot; functionality</span></div><div class='line' id='LC454'><span class="sd">    */</span></div><div class='line' id='LC455'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">action_forgot</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC456'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Password reset must be enabled in config/useradmin.php</span></div><div class='line' id='LC457'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nx">Kohana</span><span class="o">::</span><span class="na">config</span><span class="p">(</span><span class="s1">&#39;useradmin&#39;</span><span class="p">)</span><span class="o">-&gt;</span><span class="na">email</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC458'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="s1">&#39;Password reset via email is not enabled. Please contact the site administrator to reset your password.&#39;</span><span class="p">);</span></div><div class='line' id='LC459'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/register&#39;</span><span class="p">);</span></div><div class='line' id='LC460'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC461'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// set the template title (see Controller_App for implementation)</span></div><div class='line' id='LC462'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">title</span> <span class="o">=</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Forgot password&#39;</span><span class="p">);</span></div><div class='line' id='LC463'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;reset_email&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC464'>	 <span class="nx">CASSANDRA</span><span class="o">::</span><span class="na">selectColumnFamily</span><span class="p">(</span><span class="s1">&#39;Users&#39;</span><span class="p">);</span></div><div class='line' id='LC465'>	 <span class="nv">$user</span> <span class="o">=</span> <span class="nx">CASSANDRA</span><span class="o">::</span><span class="na">getIndexedSlices</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s1">&#39;email&#39;</span> <span class="o">=&gt;</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;reset_email&#39;</span><span class="p">]));</span></div><div class='line' id='LC466'>	 <span class="k">foreach</span><span class="p">(</span><span class="nv">$user_infos</span> <span class="k">as</span> <span class="nv">$uuid</span> <span class="o">=&gt;</span> <span class="nv">$cols</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC467'>		<span class="nv">$cols</span><span class="p">[</span><span class="s1">&#39;uuid&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$uuid</span><span class="p">;</span></div><div class='line' id='LC468'>		<span class="nv">$user</span> <span class="o">=</span> <span class="nv">$cols</span><span class="p">;</span></div><div class='line' id='LC469'>	 <span class="p">}</span></div><div class='line' id='LC470'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// admin passwords cannot be reset by email</span></div><div class='line' id='LC471'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$user</span><span class="p">[</span><span class="s1">&#39;uuid&#39;</span><span class="p">]</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nv">$user</span><span class="p">[</span><span class="s1">&#39;username&#39;</span><span class="p">]</span> <span class="o">!=</span> <span class="s1">&#39;admin&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC472'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// send an email with the account reset token</span></div><div class='line' id='LC473'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span><span class="o">-&gt;</span><span class="na">reset_token</span> <span class="o">=</span> <span class="nv">$user</span><span class="o">-&gt;</span><span class="na">generate_password</span><span class="p">(</span><span class="mi">32</span><span class="p">);</span></div><div class='line' id='LC474'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span><span class="o">-&gt;</span><span class="na">save</span><span class="p">();</span></div><div class='line' id='LC475'><br/></div><div class='line' id='LC476'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message</span> <span class="o">=</span> <span class="s2">&quot;You have requested a password reset. You can reset password to your account by visiting the page at:</span><span class="se">\n\n</span><span class="s2">&quot;</span></div><div class='line' id='LC477'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">.</span><span class="s2">&quot;:reset_token_link</span><span class="se">\n\n</span><span class="s2">&quot;</span></div><div class='line' id='LC478'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">.</span><span class="s2">&quot;If the above link is not clickable, please visit the following page:</span><span class="se">\n</span><span class="s2">&quot;</span></div><div class='line' id='LC479'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">.</span><span class="s2">&quot;:reset_link</span><span class="se">\n\n</span><span class="s2">&quot;</span></div><div class='line' id='LC480'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">.</span><span class="s2">&quot;and copy/paste the following Reset Token: :reset_token</span><span class="se">\n</span><span class="s2">Your user account name is: :username</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC481'><br/></div><div class='line' id='LC482'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$mailer</span> <span class="o">=</span> <span class="nx">Email</span><span class="o">::</span><span class="na">connect</span><span class="p">();</span></div><div class='line' id='LC483'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Create complex Swift_Message object stored in $message</span></div><div class='line' id='LC484'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// MUST PASS ALL PARAMS AS REFS</span></div><div class='line' id='LC485'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$subject</span> <span class="o">=</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Account password reset&#39;</span><span class="p">);</span></div><div class='line' id='LC486'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$to</span> <span class="o">=</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;reset_email&#39;</span><span class="p">];</span></div><div class='line' id='LC487'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$from</span> <span class="o">=</span> <span class="nx">Kohana</span><span class="o">::</span><span class="na">config</span><span class="p">(</span><span class="s1">&#39;useradmin&#39;</span><span class="p">)</span><span class="o">-&gt;</span><span class="na">email_address</span><span class="p">;</span></div><div class='line' id='LC488'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$body</span> <span class="o">=</span>  <span class="nx">__</span><span class="p">(</span><span class="nv">$message</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC489'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;:reset_token_link&#39;</span> <span class="o">=&gt;</span> <span class="nx">URL</span><span class="o">::</span><span class="na">site</span><span class="p">(</span><span class="s1">&#39;user/reset?reset_token=&#39;</span><span class="o">.</span><span class="nv">$user</span><span class="o">-&gt;</span><span class="na">reset_token</span><span class="o">.</span><span class="s1">&#39;&amp;reset_email=&#39;</span><span class="o">.</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;reset_email&#39;</span><span class="p">],</span> <span class="k">TRUE</span><span class="p">),</span></div><div class='line' id='LC490'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;:reset_link&#39;</span> <span class="o">=&gt;</span> <span class="nx">URL</span><span class="o">::</span><span class="na">site</span><span class="p">(</span><span class="s1">&#39;user/reset&#39;</span><span class="p">,</span> <span class="k">TRUE</span><span class="p">),</span></div><div class='line' id='LC491'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;:reset_token&#39;</span> <span class="o">=&gt;</span> <span class="nv">$user</span><span class="o">-&gt;</span><span class="na">reset_token</span><span class="p">,</span></div><div class='line' id='LC492'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;:username&#39;</span> <span class="o">=&gt;</span> <span class="nv">$user</span><span class="o">-&gt;</span><span class="na">username</span></div><div class='line' id='LC493'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">));</span></div><div class='line' id='LC494'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$message_swift</span> <span class="o">=</span> <span class="nx">Swift_Message</span><span class="o">::</span><span class="na">newInstance</span><span class="p">(</span><span class="nv">$subject</span><span class="p">,</span> <span class="nv">$body</span><span class="p">)</span></div><div class='line' id='LC495'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">-&gt;</span><span class="na">setFrom</span><span class="p">(</span><span class="nv">$from</span><span class="p">)</span></div><div class='line' id='LC496'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">-&gt;</span><span class="na">setTo</span><span class="p">(</span><span class="nv">$to</span><span class="p">);</span></div><div class='line' id='LC497'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$mailer</span><span class="o">-&gt;</span><span class="na">send</span><span class="p">(</span><span class="nv">$message_swift</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC498'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;success&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Password reset email sent.&#39;</span><span class="p">));</span></div><div class='line' id='LC499'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/login&#39;</span><span class="p">);</span></div><div class='line' id='LC500'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC501'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;failure&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Could not send email.&#39;</span><span class="p">));</span></div><div class='line' id='LC502'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC503'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span><span class="nv">$user</span><span class="o">-&gt;</span><span class="na">username</span> <span class="o">==</span> <span class="s1">&#39;admin&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC504'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Admin account password cannot be reset via email.&#39;</span><span class="p">));</span></div><div class='line' id='LC505'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC506'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;User account could not be found.&#39;</span><span class="p">));</span></div><div class='line' id='LC507'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC508'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC509'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nx">View</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user/reset/forgot&#39;</span><span class="p">);</span></div><div class='line' id='LC510'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC511'><br/></div><div class='line' id='LC512'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC513'><span class="sd">    * A basic version of &quot;reset password&quot; functionality.</span></div><div class='line' id='LC514'><span class="sd">    */</span></div><div class='line' id='LC515'>&nbsp;&nbsp;<span class="k">function</span> <span class="nf">action_reset</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC516'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Password reset must be enabled in config/useradmin.php</span></div><div class='line' id='LC517'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nx">Kohana</span><span class="o">::</span><span class="na">config</span><span class="p">(</span><span class="s1">&#39;useradmin&#39;</span><span class="p">)</span><span class="o">-&gt;</span><span class="na">email</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC518'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="s1">&#39;Password reset via email is not enabled. Please contact the site administrator to reset your password.&#39;</span><span class="p">);</span></div><div class='line' id='LC519'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/register&#39;</span><span class="p">);</span></div><div class='line' id='LC520'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC521'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// set the template title (see Controller_App for implementation)</span></div><div class='line' id='LC522'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">title</span> <span class="o">=</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Reset password&#39;</span><span class="p">);</span></div><div class='line' id='LC523'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;reset_token&#39;</span><span class="p">])</span> <span class="o">&amp;&amp;</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;reset_email&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC524'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// make sure that the reset_token has exactly 32 characters (not doing that would allow resets with token length 0)</span></div><div class='line' id='LC525'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;reset_token&#39;</span><span class="p">])</span> <span class="o">==</span> <span class="mi">32</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nx">trim</span><span class="p">(</span><span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;reset_email&#39;</span><span class="p">]))</span> <span class="o">&gt;</span> <span class="mi">1</span><span class="p">)</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC526'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span> <span class="o">=</span> <span class="nx">ORM</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user&#39;</span><span class="p">)</span><span class="o">-&gt;</span><span class="na">where</span><span class="p">(</span><span class="s1">&#39;email&#39;</span><span class="p">,</span> <span class="s1">&#39;=&#39;</span><span class="p">,</span> <span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;reset_email&#39;</span><span class="p">])</span><span class="o">-&gt;</span><span class="na">and_where</span><span class="p">(</span><span class="s1">&#39;reset_token&#39;</span><span class="p">,</span> <span class="s1">&#39;=&#39;</span><span class="p">,</span> <span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;reset_token&#39;</span><span class="p">])</span><span class="o">-&gt;</span><span class="na">find</span><span class="p">();</span></div><div class='line' id='LC527'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// The admin password cannot be reset by email</span></div><div class='line' id='LC528'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$user</span><span class="o">-&gt;</span><span class="na">username</span> <span class="o">==</span> <span class="s1">&#39;admin&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC529'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;failure&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;The admin password cannot be reset by email.&#39;</span><span class="p">));</span></div><div class='line' id='LC530'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span><span class="nb">is_numeric</span><span class="p">(</span><span class="nv">$user</span><span class="o">-&gt;</span><span class="na">id</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nv">$user</span><span class="o">-&gt;</span><span class="na">reset_token</span> <span class="o">==</span> <span class="nv">$_REQUEST</span><span class="p">[</span><span class="s1">&#39;reset_token&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC531'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$password</span> <span class="o">=</span> <span class="nv">$user</span><span class="o">-&gt;</span><span class="na">generate_password</span><span class="p">();</span></div><div class='line' id='LC532'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span><span class="o">-&gt;</span><span class="na">password</span> <span class="o">=</span> <span class="nv">$password</span><span class="p">;</span></div><div class='line' id='LC533'><span class="c1">// This field does not exist in the default config:</span></div><div class='line' id='LC534'><span class="c1">//               $user-&gt;failed_login_count = 0;</span></div><div class='line' id='LC535'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span><span class="o">-&gt;</span><span class="na">save</span><span class="p">();</span></div><div class='line' id='LC536'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;success&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Password reset.&#39;</span><span class="p">));</span></div><div class='line' id='LC537'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;success&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;p&gt;&#39;</span><span class="o">.</span><span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Your password has been reset to: &quot;:password&quot;.&#39;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;:password&#39;</span> <span class="o">=&gt;</span> <span class="nv">$password</span><span class="p">))</span><span class="o">.</span><span class="s1">&#39;&lt;/p&gt;&lt;p&gt;&#39;</span><span class="o">.</span><span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Please log in below.&#39;</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;&lt;/p&gt;&#39;</span><span class="p">);</span></div><div class='line' id='LC538'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/login?username=&#39;</span><span class="o">.</span><span class="nv">$user</span><span class="o">-&gt;</span><span class="na">username</span><span class="p">);</span></div><div class='line' id='LC539'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC540'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC541'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC542'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nx">View</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user/reset/reset&#39;</span><span class="p">);</span></div><div class='line' id='LC543'>&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC544'><br/></div><div class='line' id='LC545'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC546'><span class="sd">   * Allow the user to change their password.</span></div><div class='line' id='LC547'><span class="sd">   */</span></div><div class='line' id='LC548'>&nbsp;&nbsp;<span class="k">function</span> <span class="nf">action_change_password</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC549'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// set the template title (see Controller_App for implementation)</span></div><div class='line' id='LC550'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">title</span> <span class="o">=</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Change password&#39;</span><span class="p">);</span></div><div class='line' id='LC551'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span> <span class="o">=</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">get_user</span><span class="p">();</span></div><div class='line' id='LC552'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$id</span> <span class="o">=</span> <span class="nv">$user</span><span class="o">-&gt;</span><span class="na">id</span><span class="p">;</span></div><div class='line' id='LC553'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// load the content from view</span></div><div class='line' id='LC554'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span> <span class="o">=</span> <span class="nx">View</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user/change_password&#39;</span><span class="p">);</span></div><div class='line' id='LC555'><br/></div><div class='line' id='LC556'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// save the data</span></div><div class='line' id='LC557'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span> <span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">is_numeric</span><span class="p">(</span><span class="nv">$id</span><span class="p">)</span> <span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC558'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// editing requires that the username and email do not exist (EXCEPT for this ID)</span></div><div class='line' id='LC559'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// If the post data validates using the rules setup in the user model</span></div><div class='line' id='LC560'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$param_by_ref</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;password&#39;</span> <span class="o">=&gt;</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">],</span> <span class="s1">&#39;password_confirm&#39;</span> <span class="o">=&gt;</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;password_confirm&#39;</span><span class="p">]);</span></div><div class='line' id='LC561'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$validate</span> <span class="o">=</span> <span class="nv">$user</span><span class="o">-&gt;</span><span class="na">change_password</span><span class="p">(</span><span class="nv">$param_by_ref</span><span class="p">,</span> <span class="k">FALSE</span><span class="p">);</span></div><div class='line' id='LC562'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$validate</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC563'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// message: save success</span></div><div class='line' id='LC564'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;success&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Values saved.&#39;</span><span class="p">));</span></div><div class='line' id='LC565'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// redirect and exit</span></div><div class='line' id='LC566'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">role_redirect</span><span class="p">();</span></div><div class='line' id='LC567'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC568'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC569'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// UNFORTUNATELY, it is NOT possible to get errors for display in view</span></div><div class='line' id='LC570'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// since they will never be returned by change_password()</span></div><div class='line' id='LC571'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Password could not be changed, please make sure that the passwords match.&#39;</span><span class="p">));</span></div><div class='line' id='LC572'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Pass on the old form values</span></div><div class='line' id='LC573'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;password_confirm&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC574'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;defaults&#39;</span><span class="p">,</span> <span class="nv">$_POST</span><span class="p">);</span></div><div class='line' id='LC575'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC576'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC577'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// load the information for viewing</span></div><div class='line' id='LC578'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;data&#39;</span><span class="p">,</span> <span class="nv">$user</span><span class="o">-&gt;</span><span class="na">as_array</span><span class="p">());</span></div><div class='line' id='LC579'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC580'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nv">$view</span><span class="p">;</span></div><div class='line' id='LC581'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC582'><br/></div><div class='line' id='LC583'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC584'><span class="sd">    * Redirect to the provider&#39;s auth URL</span></div><div class='line' id='LC585'><span class="sd">    * @param string $provider</span></div><div class='line' id='LC586'><span class="sd">    */</span></div><div class='line' id='LC587'>&nbsp;&nbsp;&nbsp;<span class="k">function</span> <span class="nf">action_provider</span><span class="p">(</span><span class="nv">$provider_name</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC588'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logged_in</span><span class="p">()){</span></div><div class='line' id='LC589'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;success&#39;</span><span class="p">,</span> <span class="s1">&#39;Already logged in.&#39;</span><span class="p">);</span></div><div class='line' id='LC590'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// redirect to the user account</span></div><div class='line' id='LC591'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC592'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC593'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$provider</span> <span class="o">=</span> <span class="nx">Provider</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="nv">$provider_name</span><span class="p">);</span></div><div class='line' id='LC594'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">is_object</span><span class="p">(</span><span class="nv">$provider</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC595'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="nv">$provider</span><span class="o">-&gt;</span><span class="na">redirect_url</span><span class="p">(</span><span class="s1">&#39;/user/provider_return/&#39;</span><span class="o">.</span><span class="nv">$provider_name</span><span class="p">));</span></div><div class='line' id='LC596'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC597'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC598'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="s1">&#39;Provider is not enabled; please select another provider or log in normally.&#39;</span><span class="p">);</span></div><div class='line' id='LC599'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/login&#39;</span><span class="p">);</span></div><div class='line' id='LC600'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC601'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC602'><br/></div><div class='line' id='LC603'>&nbsp;&nbsp;&nbsp;<span class="k">function</span> <span class="nf">action_associate</span><span class="p">(</span><span class="nv">$provider_name</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC604'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logged_in</span><span class="p">()){</span></div><div class='line' id='LC605'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;confirmation&#39;</span><span class="p">])</span> <span class="o">&amp;&amp;</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;confirmation&#39;</span><span class="p">]</span> <span class="o">==</span> <span class="s1">&#39;Y&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC606'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$provider</span> <span class="o">=</span> <span class="nx">Provider</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="nv">$provider_name</span><span class="p">);</span></div><div class='line' id='LC607'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">is_object</span><span class="p">(</span><span class="nv">$provider</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC608'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="nv">$provider</span><span class="o">-&gt;</span><span class="na">redirect_url</span><span class="p">(</span><span class="s1">&#39;/user/associate_return/&#39;</span><span class="o">.</span><span class="nv">$provider_name</span><span class="p">));</span></div><div class='line' id='LC609'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC610'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC611'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="s1">&#39;Provider is not enabled; please select another provider or log in normally.&#39;</span><span class="p">);</span></div><div class='line' id='LC612'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/login&#39;</span><span class="p">);</span></div><div class='line' id='LC613'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC614'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC615'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;confirmation&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC616'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="s1">&#39;Please click Yes to confirm associating the account.&#39;</span><span class="p">);</span></div><div class='line' id='LC617'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC618'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC619'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC620'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC621'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="s1">&#39;You are not logged in.&#39;</span><span class="p">);</span></div><div class='line' id='LC622'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/login&#39;</span><span class="p">);</span></div><div class='line' id='LC623'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC624'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC625'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nx">View</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user/associate&#39;</span><span class="p">)</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;provider_name&#39;</span><span class="p">,</span> <span class="nv">$provider_name</span><span class="p">);</span></div><div class='line' id='LC626'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC627'><br/></div><div class='line' id='LC628'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC629'><span class="sd">    * Associate a logged in user with an account.</span></div><div class='line' id='LC630'><span class="sd">    *</span></div><div class='line' id='LC631'><span class="sd">    * Note that you should not trust the OAuth/OpenID provider-supplied email</span></div><div class='line' id='LC632'><span class="sd">    * addresses. Yes, for Facebook, Twitter, Google and Yahoo the user is actually</span></div><div class='line' id='LC633'><span class="sd">    * required to ensure that the email is in fact one that they control.</span></div><div class='line' id='LC634'><span class="sd">    *</span></div><div class='line' id='LC635'><span class="sd">    * However, with generic OpenID (and non-trusted OAuth providers) one can setup a</span></div><div class='line' id='LC636'><span class="sd">    * rogue provider that claims the user owns a particular email address without</span></div><div class='line' id='LC637'><span class="sd">    * actually owning it. So if you trust the email information, then you open yourself to</span></div><div class='line' id='LC638'><span class="sd">    * a vulnerability since someone might setup a provider that claims to own your</span></div><div class='line' id='LC639'><span class="sd">    * admin account email address and if you don&#39;t require the user to log in to</span></div><div class='line' id='LC640'><span class="sd">    * associate their account they gain access to any account.</span></div><div class='line' id='LC641'><span class="sd">    *</span></div><div class='line' id='LC642'><span class="sd">    * TL;DR - the only information you can trust is that the identity string is</span></div><div class='line' id='LC643'><span class="sd">    * associated with that user on that openID provider, you need the user to also</span></div><div class='line' id='LC644'><span class="sd">    * prove that they want to trust that identity provider on your application.</span></div><div class='line' id='LC645'><span class="sd">    *</span></div><div class='line' id='LC646'><span class="sd">    */</span></div><div class='line' id='LC647'>&nbsp;&nbsp;&nbsp;<span class="k">function</span> <span class="nf">action_associate_return</span><span class="p">(</span><span class="nv">$provider_name</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC648'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logged_in</span><span class="p">()){</span></div><div class='line' id='LC649'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$provider</span> <span class="o">=</span> <span class="nx">Provider</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="nv">$provider_name</span><span class="p">);</span></div><div class='line' id='LC650'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// verify the request</span></div><div class='line' id='LC651'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nb">is_object</span><span class="p">(</span><span class="nv">$provider</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nv">$provider</span><span class="o">-&gt;</span><span class="na">verify</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC652'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span> <span class="o">=</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">get_user</span><span class="p">();</span></div><div class='line' id='LC653'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$user</span><span class="o">-&gt;</span><span class="na">loaded</span><span class="p">()</span> <span class="o">&amp;&amp;</span> <span class="nb">is_numeric</span><span class="p">(</span><span class="nv">$user</span><span class="o">-&gt;</span><span class="na">id</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC654'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logged_in</span><span class="p">()</span> <span class="o">&amp;&amp;</span> <span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">get_user</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">id</span> <span class="o">==</span> <span class="nv">$user</span><span class="o">-&gt;</span><span class="na">id</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC655'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// found: &quot;merge&quot; with the existing user</span></div><div class='line' id='LC656'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user_identity</span> <span class="o">=</span> <span class="nx">ORM</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user_identity&#39;</span><span class="p">);</span></div><div class='line' id='LC657'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user_identity</span><span class="o">-&gt;</span><span class="na">user_id</span> <span class="o">=</span> <span class="nv">$user</span><span class="o">-&gt;</span><span class="na">id</span><span class="p">;</span></div><div class='line' id='LC658'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user_identity</span><span class="o">-&gt;</span><span class="na">provider</span> <span class="o">=</span> <span class="nv">$provider_name</span><span class="p">;</span></div><div class='line' id='LC659'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user_identity</span><span class="o">-&gt;</span><span class="na">identity</span> <span class="o">=</span> <span class="nv">$provider</span><span class="o">-&gt;</span><span class="na">user_id</span><span class="p">();</span></div><div class='line' id='LC660'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$user_identity</span><span class="o">-&gt;</span><span class="na">check</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC661'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;success&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span><span class="s1">&#39;Your user account has been associated with this provider.&#39;</span><span class="p">));</span></div><div class='line' id='LC662'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user_identity</span><span class="o">-&gt;</span><span class="na">save</span><span class="p">();</span></div><div class='line' id='LC663'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// redirect to the user account</span></div><div class='line' id='LC664'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC665'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC666'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC667'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="s1">&#39;We were unable to associate this account with the provider. Please make sure that there are no other accounts using this provider identity, as each 3rd party provider identity can only be associated with one user account.&#39;</span><span class="p">);</span></div><div class='line' id='LC668'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/login&#39;</span><span class="p">);</span></div><div class='line' id='LC669'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC670'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC671'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC672'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC673'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC674'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC675'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="s1">&#39;There was an error associating your account with this provider.&#39;</span><span class="p">);</span></div><div class='line' id='LC676'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/login&#39;</span><span class="p">);</span></div><div class='line' id='LC677'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC678'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC679'><br/></div><div class='line' id='LC680'>&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC681'><span class="sd">   * Allow the user to login and register using a 3rd party provider.</span></div><div class='line' id='LC682'><span class="sd">   */</span></div><div class='line' id='LC683'>&nbsp;&nbsp;&nbsp;<span class="k">function</span> <span class="nf">action_provider_return</span><span class="p">(</span><span class="nv">$provider_name</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC684'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$provider</span> <span class="o">=</span> <span class="nx">Provider</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="nv">$provider_name</span><span class="p">);</span></div><div class='line' id='LC685'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">is_object</span><span class="p">(</span><span class="nv">$provider</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC686'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="s1">&#39;Provider is not enabled; please select another provider or log in normally.&#39;</span><span class="p">);</span></div><div class='line' id='LC687'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/login&#39;</span><span class="p">);</span></div><div class='line' id='LC688'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC689'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC690'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// verify the request</span></div><div class='line' id='LC691'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$provider</span><span class="o">-&gt;</span><span class="na">verify</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC692'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// check for previously connected user</span></div><div class='line' id='LC693'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$uid</span> <span class="o">=</span> <span class="nv">$provider</span><span class="o">-&gt;</span><span class="na">user_id</span><span class="p">();</span></div><div class='line' id='LC694'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user_identity</span> <span class="o">=</span> <span class="nx">ORM</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user_identity&#39;</span><span class="p">)</span></div><div class='line' id='LC695'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">-&gt;</span><span class="na">where</span><span class="p">(</span><span class="s1">&#39;provider&#39;</span><span class="p">,</span> <span class="s1">&#39;=&#39;</span><span class="p">,</span> <span class="nv">$provider_name</span><span class="p">)</span></div><div class='line' id='LC696'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">-&gt;</span><span class="na">and_where</span><span class="p">(</span><span class="s1">&#39;identity&#39;</span><span class="p">,</span> <span class="s1">&#39;=&#39;</span><span class="p">,</span> <span class="nv">$uid</span><span class="p">)</span></div><div class='line' id='LC697'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">-&gt;</span><span class="na">find</span><span class="p">();</span></div><div class='line' id='LC698'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$user_identity</span><span class="o">-&gt;</span><span class="na">loaded</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC699'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span> <span class="o">=</span> <span class="nv">$user_identity</span><span class="o">-&gt;</span><span class="na">user</span><span class="p">;</span></div><div class='line' id='LC700'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$user</span><span class="o">-&gt;</span><span class="na">loaded</span><span class="p">()</span> <span class="o">&amp;&amp;</span> <span class="nv">$user</span><span class="o">-&gt;</span><span class="na">id</span> <span class="o">==</span> <span class="nv">$user_identity</span><span class="o">-&gt;</span><span class="na">user_id</span> <span class="o">&amp;&amp;</span> <span class="nb">is_numeric</span><span class="p">(</span><span class="nv">$user</span><span class="o">-&gt;</span><span class="na">id</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC701'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// found, log user in</span></div><div class='line' id='LC702'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">force_login</span><span class="p">(</span><span class="nv">$user</span><span class="p">);</span></div><div class='line' id='LC703'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// redirect to the user account</span></div><div class='line' id='LC704'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC705'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC706'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC707'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC708'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// create new account</span></div><div class='line' id='LC709'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">logged_in</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC710'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Instantiate a new user</span></div><div class='line' id='LC711'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span> <span class="o">=</span> <span class="nx">ORM</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user&#39;</span><span class="p">);</span></div><div class='line' id='LC712'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// fill in values</span></div><div class='line' id='LC713'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// generate long random password (maximum that passes validation is 42 characters)</span></div><div class='line' id='LC714'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$password</span> <span class="o">=</span> <span class="nv">$user</span><span class="o">-&gt;</span><span class="na">generate_password</span><span class="p">(</span><span class="mi">42</span><span class="p">);</span></div><div class='line' id='LC715'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$values</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC716'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// get a unused username like firstname.surname or firstname.surname2 ...</span></div><div class='line' id='LC717'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;username&#39;</span> <span class="o">=&gt;</span> <span class="nv">$user</span><span class="o">-&gt;</span><span class="na">generate_username</span><span class="p">(</span><span class="nb">str_replace</span><span class="p">(</span><span class="s1">&#39; &#39;</span><span class="p">,</span> <span class="s1">&#39;.&#39;</span><span class="p">,</span> <span class="nv">$provider</span><span class="o">-&gt;</span><span class="na">name</span><span class="p">())),</span></div><div class='line' id='LC718'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;password&#39;</span> <span class="o">=&gt;</span> <span class="nv">$password</span><span class="p">,</span></div><div class='line' id='LC719'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;password_confirm&#39;</span> <span class="o">=&gt;</span> <span class="nv">$password</span><span class="p">,</span></div><div class='line' id='LC720'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC721'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">Valid</span><span class="o">::</span><span class="na">email</span><span class="p">(</span><span class="nv">$provider</span><span class="o">-&gt;</span><span class="na">email</span><span class="p">(),</span> <span class="k">TRUE</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC722'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$values</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$provider</span><span class="o">-&gt;</span><span class="na">email</span><span class="p">();</span></div><div class='line' id='LC723'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span>            </div><div class='line' id='LC724'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC725'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// If the post data validates using the rules setup in the user model</span></div><div class='line' id='LC726'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span><span class="o">-&gt;</span><span class="na">create_user</span><span class="p">(</span><span class="nv">$values</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC727'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;username&#39;</span><span class="p">,</span></div><div class='line' id='LC728'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;password&#39;</span><span class="p">,</span></div><div class='line' id='LC729'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;email&#39;</span><span class="p">,</span></div><div class='line' id='LC730'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">));</span></div><div class='line' id='LC731'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Add the login role to the user (add a row to the db)</span></div><div class='line' id='LC732'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$login_role</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Model_Role</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s1">&#39;name&#39;</span> <span class="o">=&gt;</span><span class="s1">&#39;login&#39;</span><span class="p">));</span></div><div class='line' id='LC733'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user</span><span class="o">-&gt;</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;roles&#39;</span><span class="p">,</span> <span class="nv">$login_role</span><span class="p">);</span></div><div class='line' id='LC734'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// create user identity after we have the user id</span></div><div class='line' id='LC735'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user_identity</span> <span class="o">=</span> <span class="nx">ORM</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user_identity&#39;</span><span class="p">);</span></div><div class='line' id='LC736'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user_identity</span><span class="o">-&gt;</span><span class="na">user_id</span> <span class="o">=</span> <span class="nv">$user</span><span class="o">-&gt;</span><span class="na">id</span><span class="p">;</span></div><div class='line' id='LC737'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user_identity</span><span class="o">-&gt;</span><span class="na">provider</span> <span class="o">=</span> <span class="nv">$provider_name</span><span class="p">;</span></div><div class='line' id='LC738'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user_identity</span><span class="o">-&gt;</span><span class="na">identity</span> <span class="o">=</span> <span class="nv">$provider</span><span class="o">-&gt;</span><span class="na">user_id</span><span class="p">();</span></div><div class='line' id='LC739'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$user_identity</span><span class="o">-&gt;</span><span class="na">save</span><span class="p">();</span></div><div class='line' id='LC740'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// sign the user in</span></div><div class='line' id='LC741'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Auth</span><span class="o">::</span><span class="na">instance</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">login</span><span class="p">(</span><span class="nv">$values</span><span class="p">[</span><span class="s1">&#39;username&#39;</span><span class="p">],</span> <span class="nv">$password</span><span class="p">);</span></div><div class='line' id='LC742'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// redirect to the user account</span></div><div class='line' id='LC743'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC744'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">ORM_Validation_Exception</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC745'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nv">$provider_name</span> <span class="o">==</span> <span class="s1">&#39;twitter&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC746'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="s1">&#39;The Twitter API does not support retrieving your email address; you will have to enter it manually.&#39;</span><span class="p">);</span></div><div class='line' id='LC747'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC748'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="s1">&#39;We have successfully retrieved some of the data from your other account, but we were unable to get all the required fields. Please complete form below to register an account.&#39;</span><span class="p">);</span></div><div class='line' id='LC749'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC750'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// in case the data for some reason fails, the user will still see something sensible:</span></div><div class='line' id='LC751'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// the normal registration form.</span></div><div class='line' id='LC752'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span> <span class="o">=</span> <span class="nx">View</span><span class="o">::</span><span class="na">factory</span><span class="p">(</span><span class="s1">&#39;user/register&#39;</span><span class="p">);</span></div><div class='line' id='LC753'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$errors</span> <span class="o">=</span> <span class="nv">$e</span><span class="o">-&gt;</span><span class="na">errors</span><span class="p">(</span><span class="s1">&#39;register&#39;</span><span class="p">);</span></div><div class='line' id='LC754'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Move external errors to main array, for post helper compatibility</span></div><div class='line' id='LC755'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$errors</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nv">$errors</span><span class="p">,</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$errors</span><span class="p">[</span><span class="s1">&#39;_external&#39;</span><span class="p">])</span> <span class="o">?</span> <span class="nv">$errors</span><span class="p">[</span><span class="s1">&#39;_external&#39;</span><span class="p">]</span> <span class="o">:</span> <span class="k">array</span><span class="p">()));</span></div><div class='line' id='LC756'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;errors&#39;</span><span class="p">,</span> <span class="nv">$errors</span><span class="p">);</span></div><div class='line' id='LC757'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Pass on the old form values</span></div><div class='line' id='LC758'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$values</span><span class="p">[</span><span class="s1">&#39;password&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$values</span><span class="p">[</span><span class="s1">&#39;password_confirm&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC759'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;defaults&#39;</span><span class="p">,</span> <span class="nv">$values</span><span class="p">);</span></div><div class='line' id='LC760'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span><span class="p">(</span><span class="nx">Kohana</span><span class="o">::</span><span class="na">config</span><span class="p">(</span><span class="s1">&#39;useradmin&#39;</span><span class="p">)</span><span class="o">-&gt;</span><span class="na">captcha</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC761'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">include</span> <span class="nx">Kohana</span><span class="o">::</span><span class="na">find_file</span><span class="p">(</span><span class="s1">&#39;vendor&#39;</span><span class="p">,</span> <span class="s1">&#39;recaptcha/recaptchalib&#39;</span><span class="p">);</span></div><div class='line' id='LC762'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$recaptcha_config</span> <span class="o">=</span> <span class="nx">Kohana</span><span class="o">::</span><span class="na">config</span><span class="p">(</span><span class="s1">&#39;recaptcha&#39;</span><span class="p">);</span></div><div class='line' id='LC763'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$recaptcha_error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC764'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;captcha_enabled&#39;</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC765'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$view</span><span class="o">-&gt;</span><span class="na">set</span><span class="p">(</span><span class="s1">&#39;recaptcha_html&#39;</span><span class="p">,</span> <span class="nx">recaptcha_get_html</span><span class="p">(</span><span class="nv">$recaptcha_config</span><span class="p">[</span><span class="s1">&#39;publickey&#39;</span><span class="p">],</span> <span class="nv">$recaptcha_error</span><span class="p">));</span></div><div class='line' id='LC766'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC767'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">template</span><span class="o">-&gt;</span><span class="na">content</span> <span class="o">=</span> <span class="nv">$view</span><span class="p">;</span></div><div class='line' id='LC768'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC769'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC770'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="s1">&#39;You are logged in, but the email received from the provider does not match the email associated with your account.&#39;</span><span class="p">);</span></div><div class='line' id='LC771'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/profile&#39;</span><span class="p">);</span></div><div class='line' id='LC772'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC773'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC774'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">Message</span><span class="o">::</span><span class="na">add</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="s1">&#39;Retrieving information from the provider failed. Please register below.&#39;</span><span class="p">);</span></div><div class='line' id='LC775'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">request</span><span class="o">-&gt;</span><span class="na">redirect</span><span class="p">(</span><span class="s1">&#39;user/register&#39;</span><span class="p">);</span></div><div class='line' id='LC776'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC777'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC778'><br/></div><div class='line' id='LC779'>&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC780'><span class="sd">    * Media routing code. Allows lazy users to load images via Kohana. See also: init.php.</span></div><div class='line' id='LC781'><span class="sd">    * I recommend just serving the files via apache, e.g. copy the public directory to your webroot.</span></div><div class='line' id='LC782'><span class="sd">    */</span></div><div class='line' id='LC783'>&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">action_media</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC784'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// prevent auto render</span></div><div class='line' id='LC785'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">auto_render</span> <span class="o">=</span> <span class="k">FALSE</span><span class="p">;</span></div><div class='line' id='LC786'><br/></div><div class='line' id='LC787'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Generate and check the ETag for this file</span></div><div class='line' id='LC788'><span class="c1">//		$this-&gt;request-&gt;check_cache(sha1($this-&gt;request-&gt;uri));</span></div><div class='line' id='LC789'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Get the file path from the request</span></div><div class='line' id='LC790'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$file</span> <span class="o">=</span> <span class="nx">Request</span><span class="o">::</span><span class="na">current</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">param</span><span class="p">(</span><span class="s1">&#39;file&#39;</span><span class="p">);</span></div><div class='line' id='LC791'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$dir</span> <span class="o">=</span> <span class="nx">Request</span><span class="o">::</span><span class="na">current</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">param</span><span class="p">(</span><span class="s1">&#39;dir&#39;</span><span class="p">);</span></div><div class='line' id='LC792'><br/></div><div class='line' id='LC793'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Find the file extension</span></div><div class='line' id='LC794'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ext</span> <span class="o">=</span> <span class="nb">pathinfo</span><span class="p">(</span><span class="nv">$file</span><span class="p">,</span> <span class="nx">PATHINFO_EXTENSION</span><span class="p">);</span></div><div class='line' id='LC795'><br/></div><div class='line' id='LC796'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Remove the extension from the filename</span></div><div class='line' id='LC797'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$file</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$file</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="o">-</span><span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$ext</span><span class="p">)</span> <span class="o">+</span> <span class="mi">1</span><span class="p">));</span></div><div class='line' id='LC798'><br/></div><div class='line' id='LC799'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$file</span> <span class="o">=</span> <span class="nx">Kohana</span><span class="o">::</span><span class="na">find_file</span><span class="p">(</span><span class="s1">&#39;public&#39;</span><span class="p">,</span> <span class="nv">$dir</span><span class="o">.</span><span class="s1">&#39;/&#39;</span><span class="o">.</span><span class="nv">$file</span><span class="p">,</span> <span class="nv">$ext</span><span class="p">);</span></div><div class='line' id='LC800'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$file</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC801'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Send the file content as the response</span></div><div class='line' id='LC802'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span><span class="o">-&gt;</span><span class="na">body</span><span class="p">(</span><span class="nb">file_get_contents</span><span class="p">(</span><span class="nv">$file</span><span class="p">));</span></div><div class='line' id='LC803'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC804'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Return a 404 status</span></div><div class='line' id='LC805'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span><span class="o">-&gt;</span><span class="na">status</span><span class="p">(</span><span class="mi">404</span><span class="p">);</span></div><div class='line' id='LC806'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC807'><br/></div><div class='line' id='LC808'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Set the proper headers to allow caching</span></div><div class='line' id='LC809'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span><span class="o">-&gt;</span><span class="na">headers</span><span class="p">(</span><span class="s1">&#39;Content-Type&#39;</span><span class="p">,</span> <span class="nx">File</span><span class="o">::</span><span class="na">mime_by_ext</span><span class="p">(</span><span class="nv">$ext</span><span class="p">));</span></div><div class='line' id='LC810'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span><span class="o">-&gt;</span><span class="na">headers</span><span class="p">(</span><span class="s1">&#39;Content-Length&#39;</span><span class="p">,</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span><span class="nb">filesize</span><span class="p">(</span><span class="nv">$file</span><span class="p">));</span></div><div class='line' id='LC811'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span><span class="o">-&gt;</span><span class="na">headers</span><span class="p">(</span><span class="s1">&#39;Last-Modified&#39;</span><span class="p">,</span> <span class="nb">date</span><span class="p">(</span><span class="s1">&#39;r&#39;</span><span class="p">,</span> <span class="nb">filemtime</span><span class="p">(</span><span class="nv">$file</span><span class="p">)));</span></div><div class='line' id='LC812'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC813'><span class="p">}</span></div><div class='line' id='LC814'><br/></div></pre></div>
              
            
          </td>
        </tr>
      </table>
    
  </div>


          </div>
        </div>
      </div>
    </div>
  

  </div>


<div class="frame frame-loading" style="display:none;" data-tree-list-url="/jnbdz/useradmin/tree-list/548314cea8928573827a0c706c13187270cd9dff" data-blob-url-prefix="/jnbdz/useradmin/blob/548314cea8928573827a0c706c13187270cd9dff">
  <img src="https://a248.e.akamai.net/assets.github.com/images/modules/ajax/big_spinner_336699.gif" height="32" width="32">
</div>

    </div>
  
      
    </div>

    <!-- footer -->
    <div id="footer" >
       <div class="upper_footer">
   <div class="site" class="clearfix">

     <!--[if IE]><h4 id="blacktocat_ie">GitHub Links</h4><![endif]-->
     <![if !IE]><h4 id="blacktocat">GitHub Links</h4><![endif]>

     <ul class="footer_nav">
       <h4>GitHub</h4>
       <li><a href="https://github.com/about">About</a></li>
       <li><a href="https://github.com/blog">Blog</a></li>
       <li><a href="https://github.com/features">Features</a></li>
       <li><a href="https://github.com/contact">Contact &amp; Support</a></li>
       <li><a href="https://github.com/training">Training</a></li>
       <li><a href="http://status.github.com/">Site Status</a></li>
     </ul>

     <ul class="footer_nav">
       <h4>Tools</h4>
       <li><a href="http://mac.github.com/">GitHub for Mac</a></li>
       <li><a href="http://mobile.github.com/">Issues for iPhone</a></li>
       <li><a href="https://gist.github.com">Gist: Code Snippets</a></li>
       <li><a href="http://fi.github.com/">Enterprise Install</a></li>
       <li><a href="http://jobs.github.com/">Job Board</a></li>
     </ul>

     <ul class="footer_nav">
       <h4>Extras</h4>
       <li><a href="http://shop.github.com/">GitHub Shop</a></li>
       <li><a href="http://octodex.github.com/">The Octodex</a></li>
     </ul>

     <ul class="footer_nav">
       <h4>Documentation</h4>
       <li><a href="http://help.github.com/">GitHub Help</a></li>
       <li><a href="http://developer.github.com/">Developer API</a></li>
       <li><a href="http://github.github.com/github-flavored-markdown/">GitHub Flavored Markdown</a></li>
       <li><a href="http://pages.github.com/">GitHub Pages</a></li>
     </ul>

   </div><!-- /.site -->
 </div><!-- /.upper_footer -->

 <div class="lower_footer">
  <div class="site" class="clearfix">
    <!--[if IE]><div id="legal_ie"><![endif]-->
    <![if !IE]><div id="legal"><![endif]>
      <ul>
        <li><a href="https://github.com/site/terms">Terms of Service</a></li>
        <li><a href="https://github.com/site/privacy">Privacy</a></li>
        <li><a href="https://github.com/security">Security</a></li>
      </ul>

      <p>&copy; 2011 <span id="_rrt" title="0.08716s from fe11.rs.github.com">GitHub</span> Inc. All rights reserved.</p>
    </div><!-- /#legal or /#legal_ie-->

    
      <div class="sponsor">
        <a href="http://www.rackspace.com" class="logo">
          <img alt="Dedicated Server" height="36" src="https://a248.e.akamai.net/assets.github.com/images/modules/footer/rackspace_logo.png?v2" width="38" />
        </a>
        Powered by the <a href="http://www.rackspace.com ">Dedicated
        Servers</a> and<br/> <a href="http://www.rackspacecloud.com">Cloud
        Computing</a> of Rackspace Hosting<span>&reg;</span>
      </div>
    
  </div><!-- /.site -->
</div><!-- /.lower_footer -->

    </div><!-- /#footer -->

    

<div id="keyboard_shortcuts_pane" class="instapaper_ignore readability-extra" style="display:none">
  <h2>Keyboard Shortcuts <small><a href="#" class="js-see-all-keyboard-shortcuts">(see all)</a></small></h2>

  <div class="columns threecols">
    <div class="column first">
      <h3>Site wide shortcuts</h3>
      <dl class="keyboard-mappings">
        <dt>s</dt>
        <dd>Focus site search</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>?</dt>
        <dd>Bring up this help dialog</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column middle" style='display:none'>
      <h3>Commit list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selected down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selected up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>c <em>or</em> o <em>or</em> enter</dt>
        <dd>Open commit</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>y</dt>
        <dd>Expand URL to its canonical form</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column last" style='display:none'>
      <h3>Pull request list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selected down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selected up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>o <em>or</em> enter</dt>
        <dd>Open issue</dd>
      </dl>
    </div><!-- /.columns.last -->

  </div><!-- /.columns.equacols -->

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Issues</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selected down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selected up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>x</dt>
          <dd>Toggle select target</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column middle">
        <dl class="keyboard-mappings">
          <dt>I</dt>
          <dd>Mark selected as read</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>U</dt>
          <dd>Mark selected as unread</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>e</dt>
          <dd>Close selected</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Remove selected from view</dd>
        </dl>
      </div><!-- /.column.middle -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>c</dt>
          <dd>Create issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Create label</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>i</dt>
          <dd>Back to inbox</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>u</dt>
          <dd>Back to issues</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>/</dt>
          <dd>Focus issues search</dd>
        </dl>
      </div>
    </div>
  </div>

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Issues Dashboard</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selected down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selected up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
    </div>
  </div>

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Network Graph</h3>
    <div class="columns equacols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt><span class="badmono">←</span> <em>or</em> h</dt>
          <dd>Scroll left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">→</span> <em>or</em> l</dt>
          <dd>Scroll right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↑</span> <em>or</em> k</dt>
          <dd>Scroll up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↓</span> <em>or</em> j</dt>
          <dd>Scroll down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Toggle visibility of head labels</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">←</span> <em>or</em> shift h</dt>
          <dd>Scroll all the way left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">→</span> <em>or</em> shift l</dt>
          <dd>Scroll all the way right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↑</span> <em>or</em> shift k</dt>
          <dd>Scroll all the way up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↓</span> <em>or</em> shift j</dt>
          <dd>Scroll all the way down</dd>
        </dl>
      </div><!-- /.column.last -->
    </div>
  </div>

  <div >
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first" >
        <h3>Source Code Browsing</h3>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Activates the file finder</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Jump to line</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Expand URL to its canonical form</dd>
        </dl>
      </div>
    </div>
  </div>
</div>

    <div id="markdown-help" class="instapaper_ignore readability-extra">
  <h2>Markdown Cheat Sheet</h2>

  <div class="cheatsheet-content">

  <div class="mod">
    <div class="col">
      <h3>Format Text</h3>
      <p>Headers</p>
      <pre>
# This is an &lt;h1&gt; tag
## This is an &lt;h2&gt; tag
###### This is an &lt;h6&gt; tag</pre>
     <p>Text styles</p>
     <pre>
*This text will be italic*
_This will also be italic_
**This text will be bold**
__This will also be bold__

*You **can** combine them*
</pre>
    </div>
    <div class="col">
      <h3>Lists</h3>
      <p>Unordered</p>
      <pre>
* Item 1
* Item 2
  * Item 2a
  * Item 2b</pre>
     <p>Ordered</p>
     <pre>
1. Item 1
2. Item 2
3. Item 3
   * Item 3a
   * Item 3b</pre>
    </div>
    <div class="col">
      <h3>Miscellaneous</h3>
      <p>Images</p>
      <pre>
![GitHub Logo](/images/logo.png)
Format: ![Alt Text](url)
</pre>
     <p>Links</p>
     <pre>
http://github.com - automatic!
[GitHub](http://github.com)</pre>
<p>Blockquotes</p>
     <pre>
As Kanye West said:
> We're living the future so
> the present is our past.
</pre>
    </div>
  </div>
  <div class="rule"></div>

  <h3>Code Examples in Markdown</h3>
  <div class="col">
      <p>Syntax highlighting with <a href="http://github.github.com/github-flavored-markdown/" title="GitHub Flavored Markdown" target="_blank">GFM</a></p>
      <pre>
```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```</pre>
    </div>
    <div class="col">
      <p>Or, indent your code 4 spaces</p>
      <pre>
Here is a Python code example
without syntax highlighting:

    def foo:
      if not bar:
        return true</pre>
    </div>
    <div class="col">
      <p>Inline code for comments</p>
      <pre>
I think you should use an
`&lt;addr&gt;` element here instead.</pre>
    </div>
  </div>

  </div>
</div>
    

    <div class="context-overlay"></div>

    
    
    
  </body>
</html>

