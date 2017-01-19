﻿try { window.scriptsLoaded = window.scriptsLoaded || {}; window.scriptProcessStart = window.scriptProcessStart || {}; window.scriptProcessStart['microsoft.owa.moderngroupsdesktopnavigation.js'] = (new Date()).getTime();
function ModernGroupsDesktopNavigationComponent(){}ModernGroupsDesktopNavigationComponent.$$cctor=function(){_a.r.a().a(ModernGroupsDesktopNavigationComponent)};ModernGroupsDesktopNavigationComponent.prototype={a:function(n,t,i){var r=this;n.b(IGroupsNavigationViewModelFactory,function(){var t=n.a(_mgn.a);return new _mgdn.g(t.g,n.a(_ff.c),n.c(IIntroductionControllerFactory),n.a(_a.bb))}).a()},b:function(){return[]}};Type.registerNamespace("_mgdn");_mgdn.c=function(n,t,i,r,u,f,e){this.n=Function.createDelegate(this,this.A);_mgdn.c.initializeBase(this,[n,t,u,f,"",!0,!1]);_a.b.a(n,"treeLabel");_a.b.a(t,"firstLevelGroupViewModels");_a.b.a(i,"groupsNavigationViewModel");_a.b.a(u,"treeNodeTemplateId");_a.b.a(f,"activateGroupSelectionCommand");this.g=i;this.o=e;this.i=r;this.d=new _mgdn.f(null,this);this.c.y.length>0&&this.b.a(this.d);this.i.b(_y.bD,this.n)};_mgdn.c.prototype={g:null,i:null,d:null,k:!1,o:null,j:!1,y:function(n){if(this.k!==n){this.k=n;this.ea("ShouldShowIntroductionPeek")}return n},z:function(){return this.g.i.i()},C:function(n){if(this.j!==n){this.j=n;this.ea("IsCreateGroupButtonShown")}return n},D:function(n){this.a(n);this.d.t(n);n||this.m(null)},ed:function(){this.i.c(_y.bD,this.n);_mgdn.b.prototype.ed.call(this)},l:function(n,t){_mgdn.b.prototype.l.call(this,n,t);this.d&&(this.c.y.length>0&&!this.b.x(this.d)?this.b.a(this.d):this.c.y.length||this.b.m(this.d,!0))},A:function(n){var t=n.a;_g.a.a().e().bh.GroupCreationEnabled||(t=!1);this.C(t)}};_mgdn.e=function(n,t,i,r,u){this.C=Function.createDelegate(this,this.L);this.H=Function.createDelegate(this,this.N);_mgdn.e.initializeBase(this);_a.b.a(n,"groupsViewModel");this.i=n;this.D=t;this.t=i;this.E=r;this.G=u;var o=this;var s=new _C(function(){o.w(o.l.e)},_a.a.n);var f=this;var e=new _C(function(){f.p&&f.p.f?f.w(f.p.f.b):f.w(null)},_a.a.n);this.l=new _mgdn.c(_u.R.aU,this.i.b(),this,this.D,this.t,s,this.i.e());this.v=new _js.f;if(this.i.a()!==2){this.k=new _mgdn.b(_u.R.Wm,this.i.k(),this.t,e,_u.R.Sx,!1,!1);this.v.a(this.k)}this.m=new _mgdn.b(_u.R.In,this.i.j(),this.t,e,_u.R.Yg,!1,!1);this.v.a(this.m);this.q=new _mgdn.b(_u.R.ce,this.i.z,this.t,e,"",!1,!0);this.v.a(this.q);this.n=new _mgdn.b(_u.R.JW,this.i.I,this.t,e,"",!0,!0);this.v.a(this.n);this.M()};_mgdn.e.prototype={i:null,t:null,E:null,D:null,G:null,l:null,k:null,m:null,q:null,n:null,v:null,y:null,p:null,A:null,o:null,r:null,F:null,z:null,c:function(){return this.i},a:function(){return this.o},w:function(n){if(this.A!==n){this.A=n;this.o=this.K(n);this.I(n);this.i.G(n);this.ee("SelectedGroupViewModel","SelectedModernGroup")}return n},f:function(n){if(this.F!==n){this.F=n;this.l.d.f=n;this.ea("MoreCommand")}return n},h:function(){return this.z},O:function(n){if(this.z!==n){this.z=n;this.ea("ReturnCommand")}return n},J:function(){this.y||(this.y=new _C(this.H,_a.a.n));return this.y},j:function(){return _u.R.JN},g:function(){return null},x:function(n){if(this.p!==n){this.p=n;this.ea("SelectedSecondLevelGroupsTree")}return n},e:function(n){var t=this;this.O(new _C(function(){t.I(t.A);n.a()},_a.a.n))},b:function(n){if(n)if(this.o&&n.a()===this.o.a())return;else{var t=this.i.g(n.bh.SmtpAddress);if(t)this.w(t);else{t=this.i.bq(n);this.o=t.j;this.w(t)}}else this.w(null)},d:function(n){this.b(_g.P.e(n))},ed:function(){this.l.dispose();this.k&&this.k.dispose();this.m.dispose();this.q.dispose();this.n.dispose();this.r&&this.r.e(this.C);_a.iX.prototype.ed.call(this)},I:function(n){this.l.D(n);if(n)if(n.j.f()&&this.i.a()!==2){this.k.a(n);this.x(this.k);this.m.a(null);this.q.a(null);this.n.a(null)}else if(n.j.isMember){this.m.a(n);this.x(this.m);this.k&&this.k.a(null);this.q.a(null);this.n.a(null)}else if(n.j.i){this.n.a(n);this.x(this.n);this.k&&this.k.a(null);this.m.a(null);this.q.a(null)}else{this.q.a(n);this.x(this.q);this.k&&this.k.a(null);this.m.a(null);this.n.a(null)}else if(this.p){this.p.a(null);this.x(null)}},K:function(n){return n?this.o&&this.o.a()===n.a()?this.o:n.j:null},M:function(){if(_y.j.b(2)){var n=this;this.E.a(function(t){n.r=n.i.f()?t.a(_u.R.MT,_u.R.hx,7,n.J(),_u.R.WU,2):t.a(_u.R.bM,_u.R.Dv,7,n.i.R,_u.R.ic,2);n.l.y(!0);n.r.d(n.C)})}},N:function(){var n=this.i.b().y.length>0?this.i.b().y[0].j:null;n&&this.G.a(_a.X.b(n.bh.SmtpAddress,0))},L:function(){this.l.y(!1)}};_mgdn.g=function(n,t,i,r){this.c=n;this.b=t;this.d=i;this.e=r};_mgdn.g.prototype={c:null,b:null,d:null,e:null,a:function(n){return new _mgdn.e(this.c,this.b,n,this.d,this.e)}};_mgdn.b=function(n,t,i,r,u,f,e){this.p=Function.createDelegate(this,this.l);this.b=new _js.f;_mgdn.b.initializeBase(this);this.w=n;this.c=t;this.x=i;this.q=r;this.r=u;this.v=f;this.t=e;this.h=!1;this.G();this.c.d(this.p)};_mgdn.b.prototype={w:null,x:null,c:null,r:null,v:!1,t:!1,q:null,e:null,f:null,h:!1,F:function(){return this.x},a:function(n){if(this.e!==n){this.e=n;this.ea("SelectedGroup")}return n},m:function(n){if(this.f!==n){this.f=n;this.a(this.f?this.f.b:null);this.ea("SelectedGroupTreeNode")}return n},E:function(){return this.t?!this.c.y.length:!1},H:function(n){if(this.h!==n){this.h=n;this.ea("IsCollapsed")}return n},ed:function(){this.c.e(this.p);for(var t=this.b.y.length,n=0;n<t;n++)this.b.y[n].dispose();this.b.g();_a.iX.prototype.ed.call(this)},l:function(n,t){switch(t.c){case 0:for(var f=new Array(t.a.length),i=0;i<t.a.length;i++)f[i]=new _mgdn.a(t.a[i],this);this.b.v(t.d,f);break;case 1:for(var u=0;u<t.a.length;u++){var o=this.b.y[t.d+u];this.b.w(t.d,t.e,o)}break;case 2:for(var r=0;r<t.b.length;r++){var e=this.b.y[r+t.d];e.dispose()}this.b.t(t.d,t.b.length);break}this.ea("HideTree")},G:function(){if(this.c.y.length){var n=new _js.B(0,0,this.c.f(),null);this.l(this.c,n)}}};_mgdn.a=function(n,t){this.h=Function.createDelegate(this,this.r);this.g=Function.createDelegate(this,this.q);_mgdn.a.initializeBase(this);_a.b.a(t,"groupsTree");this.b=n;this.a=t;this.a.apcl("SelectedGroup",this.g);this.b&&this.b.j.unseenData.apcl("UnseenCount",this.h);this.j()};_mgdn.a.prototype={b:null,a:null,c:!1,e:"",p:function(){return this.a.F()},d:function(n){if(this.c!==n){this.c=n;this.ea("IsSelected")}return n},o:function(){return null},n:function(){return this.b.n},i:function(n){if(this.e!==n){this.e=n;this.ea("NarratedCountString")}return n},ed:function(){_a.iX.prototype.ed.call(this);this.a.rpcl("SelectedGroup",this.g);this.b&&this.b.j.unseenData.rpcl("UnseenCount",this.h)},j:function(){this.a&&this.a.e?this.a.e.a()===this.b.a()?this.d(!0):this.d(!1):this.d(!1);this.c&&this.a.m(this)},q:function(n,t){this.j()},r:function(n,t){var i=this.b.j.unseenData.bh.UnseenCount;i<=0?this.i(""):i===1?this.i(_u.R.FH):this.i(String.format(_u.R.WI,i))}};_mgdn.f=function(n,t){this.l=new _fm.f(null);_mgdn.f.initializeBase(this,[n,t]);this.l=new _fm.f(null);var i=this;this.k=new _C(function(){i.f&&i.f.a()},_a.a.n)};_mgdn.f.prototype={k:null,f:null,n:function(){return this.l},p:function(){return"GroupsNavigationTreeTemplates.MoreGroups"},o:function(){return this.k},t:function(n){this.m(n)},j:function(){this.a&&this.a.e?this.m(this.a.e):this.m(null)},m:function(n){n?this.a.c.x(n)?this.d(!1):this.d(!0):this.d(!1);this.c&&this.a.m(this)}};_mgdn.d=function(n){_mgdn.d.initializeBase(this,[n])};_mgdn.d.prototype={a:null,J:function(){_js.b.prototype.J.call(this);if(!this.a){var i=_a.d.b(_a.a.n,"UnifiedGroupLeftNavInfo",!0);var n=new _a.q;this.a=this.b(this.x);var t=this.c(this.x,this.a);n.a("LeftNavHeight",this.a.clientHeight);n.a("TopPosition",t);n.a("ClientScreenHeight",window.screen.height);n.a("ClientScreenWidth",window.screen.width);n.a("ClientWindowHeight",window.document.body.clientHeight);n.a("ClientWindowWidth",window.document.body.clientWidth);n.c("IsPanelVisibleOnLoad",t+_mgdn.d.a<this.a.clientHeight);n.c("IsPanelPartiallyVisible",t<this.a.clientHeight);i.j=n.toString();_a.d.a(i)}},b:function(n){for(var t=n;t!==window.document.body;){t=t.offsetParent;if(t.clientHeight!==t.scrollHeight)break}return t},c:function(n,t){for(var i=0;n!==t;){i+=n.offsetTop;n=n.offsetParent}return i}};_mgdn._TI=function(){};_mgdn._TI.$$cctor=function(){var a="CondensedGroupsNavigationView.TreeRootNodeHelperTemplate._tid2";new _A(a,function(){_mgdn._TI.a[a]===undefined&&(_mgdn._TI.a[a]=[[[-1,0,["GroupsViewModel"],[_mgdn._TI.bc],null,"DataContext",null,_mgdn._TI.i,1,null,null,null],[0,0,["HasGroups"],[_mgdn._TI.S],null,"IsHidden",null,_mgdn._TI.e,1,null,null,!0]]]);var t=_mgdn._TI._hf.childNodes[0].cloneNode(!0);var n=new _js.b(t.children[0]);n.w("GroupsView.NoGroups");return new _B(t,[n])},_mgdn.c,_js.b,function(n){return new _js.b(n)},!1,!0,!1,0,_mgdn._TI.a);var v="CondensedGroupsNavigationView.TreeRootNodeHelperTemplate";new _A(v,function(){_mgdn._TI.a[v]===undefined&&(_mgdn._TI.a[v]=[[[-1,1,["TreeContainer"],[_mgdn._TI.K],null,"TreeContainer",null,_mgdn._TI.Q,1,null,null,null],[-1,0,["IsCollapsed"],[_mgdn._TI.p],_mgdn._TI.bi,"IsCollapsed",_mgdn._TI.o,_mgdn._TI.W,2,null,null,!1]],[[-1,0,["IsCollapsed"],[_mgdn._TI.p],null,"IsHidden",null,_mgdn._TI.e,1,null,null,!0]]]);var e=_mgdn._TI._hf.childNodes[1].cloneNode(!0);var h=new _js.b(e.children[1]);h.w("CondensedGroupsNavigationView.TreeRootNodeHelperTemplate._tid2");var n=new _n.b(e.children[0],_js.a.Instance.a(_n.c),_js.a.Instance.a(_a.e));n.r(!0);n.bg(!0);n.w("GroupsNavigationTreeTemplates.FirstLevelTreeHeaderView");var o=new _fc.g;o.b=!0;var s=new _fc.c;s.D(_E.a(["ContextParent","ExpandCommand"],[_mgdn._TI.c,_mgdn._TI.M],null,"Command",null,_mgdn._TI.b,1));s.i("RIGHTARROW");var f=new _fc.c;f.D(_E.a(["ContextParent","CollapseCommand"],[_mgdn._TI.c,_mgdn._TI.L],null,"Command",null,_mgdn._TI.b,1));f.i("LEFTARROW");var i=new _fc.c;i.D(_E.a(["ContextParent","FocusOnPrevNodeCommand"],[_mgdn._TI.c,_mgdn._TI.O],null,"Command",null,_mgdn._TI.b,1));i.i("UPARROW");var t=new _fc.c;t.D(_E.a(["ContextParent","FocusOnNextNodeCommand"],[_mgdn._TI.c,_mgdn._TI.N],null,"Command",null,_mgdn._TI.b,1));t.i("DOWNARROW");var r=new _fc.c;r.D(_E.a(["ContextParent","SelectNodeCommand"],[_mgdn._TI.c,_mgdn._TI.l],null,"Command",null,_mgdn._TI.b,1));r.i("ENTER");var u=new _fc.c;u.D(_E.a(["ContextParent","SelectNodeCommand"],[_mgdn._TI.c,_mgdn._TI.l],null,"Command",null,_mgdn._TI.b,1));u.i("SPACE");o.a([s,f,i,t,r,u]);n.H([o]);return new _B(e,[n,h]).R({TreeNodeId:n})},_mgdn.c,_n.d,function(n){return new _n.d(n)},!1,!1,!1,0,_mgdn._TI.a);var c="CondensedGroupsNavigationView";new _A(c,function(){_mgdn._TI.a[c]===undefined&&(_mgdn._TI.a[c]=[[[-1,0,["FirstLevelGroupsTree"],[_mgdn._TI.R],null,"DataSource",null,_mgdn._TI.Z,1,null,null,null],[-1,0,["FirstLevelGroupsTree","SelectedGroupTreeNode"],[_mgdn._TI.R,_mgdn._TI.bh],_mgdn._TI.bj,"SelectedTreeNodeData",_mgdn._TI.X,_mgdn._TI.ba,2,null,null,null],[-1,0,["FirstLevelGroupsTree","ActivateGroupSelectionCommand"],[_mgdn._TI.R,_mgdn._TI.bf],null,"ActivateTreeNodeSelectionCommand",null,_mgdn._TI.Y,0,null,null,null]]]);var t=_mgdn._TI._hf.childNodes[2].cloneNode(!0);var n=new _n.l(t.children[0]);n.e(0);n.b("CondensedGroupsNavigationView.TreeRootNodeHelperTemplate");n.I(33);n.W("Groups");return new _B(t,[n]).b(n)},_mgdn.e,_js.b,function(n){return new _js.b(n)},!1,!1,!1,0,_mgdn._TI.a);var l="GroupsNavigationTreeTemplates.FirstLevelTreeHeaderView._tid5";new _A(l,function(){_mgdn._TI.a[l]===undefined&&(_mgdn._TI.a[l]=[[[-1,0,["GroupsViewModel"],[_mgdn._TI.bc],null,"DataContext",null,_mgdn._TI.i,1,null,null,null],[0,0,["HasGroups"],[_mgdn._TI.S],null,"IsHidden",null,_mgdn._TI.e,1,_mgdn._TI.f(),null,!0]]]);var t=_mgdn._TI._hf.childNodes[3].cloneNode(!0);var n=new _js.b(t.children[0]);n.w("GroupsView.GroupFunctionsTemplate");return new _B(t,[n])},_mgdn.c,_js.b,function(n){return new _js.b(n)},!1,!0,!1,0,_mgdn._TI.a);var y="GroupsNavigationTreeTemplates.FirstLevelTreeHeaderView";new _A(y,function(){_mgdn._TI.a[y]===undefined&&(_mgdn._TI.a[y]=[null,null,null,null,[[-1,4,null,null,null,"ImageId",null,_mgdn._TI.y,0,null,null,null,_n.a.bb()],[-1,4,null,null,null,"PressedImageId",null,_mgdn._TI.E,0,null,null,null,_n.a.ba()],[-1,4,null,null,null,"HoveredImageId",null,_mgdn._TI.D,0,null,null,null,_n.a.Z()],[-1,4,null,null,null,"CheckedImageId",null,_mgdn._TI.by,0,null,null,null,_n.a.S()],[-1,4,null,null,null,"PressedCheckedImageId",null,_mgdn._TI.bB,0,null,null,null,_n.a.X()],[-1,4,null,null,null,"HoveredCheckedImageId",null,_mgdn._TI.bz,0,null,null,null,_n.a.W()],[-1,1,["IsCollapsed"],[_mgdn._TI.o],null,"IsChecked",null,_mgdn._TI.bA,1,null,null,!1]],[[-1,0,["TreeLabel"],[_mgdn._TI.m],null,"Text",null,_mgdn._TI.g,1,null,null,null],[-1,0,["TreeLabel"],[_mgdn._TI.m],null,"AriaLabel",null,_mgdn._TI.k,1,null,null,null]],[[-1,4,null,null,null,"ImageId",null,_mgdn._TI.y,0,null,null,null,_n.a.bc()],[-1,4,null,null,null,"HoveredImageId",null,_mgdn._TI.D,0,null,null,null,_n.a.bd()],[-1,4,null,null,null,"PressedImageId",null,_mgdn._TI.E,0,null,null,null,_n.a.be()],[-1,4,null,null,null,"Title",null,_mgdn._TI.A,0,null,null,null,_u.R.SH],[-1,0,["IsCreateGroupButtonShown"],[_mgdn._TI.cc],null,"IsHidden",null,_mgdn._TI.e,1,_mgdn._TI.f(),null,!0],[-1,0,["CreateGroupCommand"],[_mgdn._TI.cb],null,"ClickCommand",null,_mgdn._TI.bv,1,null,null,null]],[[-1,4,null,null,null,"Text",null,_mgdn._TI.bw,0,null,null,null,_u.R.gV],[-1,4,null,null,null,"ImageId",null,_mgdn._TI.y,0,null,null,null,_n.a.eb()],[-1,0,["ShouldShowIntroductionPeek"],[_mgdn._TI.be],null,"IsHidden",null,_mgdn._TI.e,1,_mgdn._TI.f(),null,!0]],[[-1,0,["IsCollapsed"],[_mgdn._TI.p],null,"IsHidden",null,_mgdn._TI.e,1,null,null,!0]],[[-1,0,["Children"],[_mgdn._TI.bg],null,"DataSource",null,_mgdn._TI.V,1,null,null,null],[-1,5,["IsCollapsed"],[_mgdn._TI.o],null,"_mgdn_p",null,null,1,null,null,null]]]);var n=_mgdn._TI._hf.childNodes[4].cloneNode(!0);var f=new _n.d(n.children[1]);f.I(33);f.b("GroupsNavigationTreeTemplates.GroupsTreeNodeHelperTemplate");var s=new _js.b(_B.a(n,[0,4]));s.w("GroupsNavigationTreeTemplates.FirstLevelTreeHeaderView._tid5");var i=new _fc.b(_B.a(n,[0,3,0]));i.f("_mgdn_k");i.C(-1);var t=new _b.D(_js.a.Instance.a(_b.p),_js.a.Instance.a(_b.a),_js.a.Instance.a(_y.a),_js.a.Instance.a(_ff.c),_js.a.Instance.a(_ff.b));t.A(_E.a(["ShouldShowIntroductionPeek"],[_mgdn._TI.be],null,"IsEnabled",null,_mgdn._TI.bJ,1,null,null,!1)).A(_E.a(["IntroductionController","IntroductionPeekContentViewModel"],[_mgdn._TI.bd,_mgdn._TI.T],null,"PeekDataContext",null,_mgdn._TI.bI,1)).A(_E.a(["IntroductionController","IntroductionPeekContentViewModel","IsShown"],[_mgdn._TI.bd,_mgdn._TI.T,_mgdn._TI.bs],_mgdn._TI.bt,"IsShown",_mgdn._TI.bK,_mgdn._TI.bL,2,null,null,!1)).D(_E.a(["AttachedElement"],[_mgdn._TI.bE],null,"AnchorElement",null,_mgdn._TI.bH,1));t.z(0);t.R=!1;t.f("IntroductionPeekContentView");t.h(1);t.j(10);i.H([t]);var c=new _fc.b(_B.a(n,[0,2]));var r=new _fc.a(_B.a(n,[0,1,1]));r.I(25);var u=new _fce.e(_js.a.Instance.a(_fc.e),_js.a.Instance.a(_ff.c),_js.a.Instance.a(_ff.a),_js.a.Instance.a(_ff.b));u.A(_E.a(["ContextMenuViewModel"],[_mgdn._TI.bb],null,"MenuDataContext",null,_mgdn._TI.H,1)).A(_E.a(["ContextMenuViewModel","IsShown"],[_mgdn._TI.bb,_mgdn._TI.z],_mgdn._TI.I,"IsShown",_mgdn._TI.F,_mgdn._TI.G,2,null,null,!1));u.a=2;r.H([u]);var a=new _fc.j(_B.a(n,[0,1,0,0]));var e=new _js.c(_B.a(n,[0,1,0]));var o=new _js.c(_B.a(n,[0,1]));var l=new _mgdn.d(_B.a(n,[0,0]));var h=new _js.c(n.children[0]);return new _B(n,[h,l,o,e,a,r,c,i,s,f]).R({TreeNodeLabel:h,TreeNodeContainer:o,TwistyContainer:e})},_mgdn.c,_n.b,function(n){return new _n.b(n,_js.a.Instance.a(_n.c),_js.a.Instance.a(_a.e))},!1,!1,!1,0,_mgdn._TI.a);var b="GroupsNavigationTreeTemplates.TreeHeaderView";new _A(b,function(){_mgdn._TI.a[b]===undefined&&(_mgdn._TI.a[b]=[null,null,null,[[-1,1,["ToggleIconState"],[_mgdn._TI.bS],null,"Id",null,_mgdn._TI.bx,1,_mgdn._TI.bo(),!1,null]],[[-1,0,["TreeLabel"],[_mgdn._TI.m],null,"Text",null,_mgdn._TI.g,1,null,null,null],[-1,0,["TreeLabel"],[_mgdn._TI.m],null,"AriaLabel",null,_mgdn._TI.k,1,null,null,null]],[[-1,0,["Children"],[_mgdn._TI.bg],null,"DataSource",null,_mgdn._TI.V,1,null,null,null],[-1,5,["IsCollapsed"],[_mgdn._TI.o],null,"_mgdn_p",null,null,1,null,null,null]]]);var n=_mgdn._TI._hf.childNodes[5].cloneNode(!0);var t=new _n.d(n.children[1]);t.I(33);t.b("GroupsNavigationTreeTemplates.GroupsTreeNodeHelperTemplate");var u=new _fc.a(_B.a(n,[0,0,1]));u.I(25);var e=new _fc.d(_B.a(n,[0,0,0,0]),_js.a.Instance.a(_ff.a),_js.a.Instance.a(_ff.b));var i=new _js.c(_B.a(n,[0,0,0]));var r=new _js.c(_B.a(n,[0,0]));var f=new _js.c(n.children[0]);return new _B(n,[f,r,i,e,u,t]).R({TreeNodeLabel:f,TreeNodeContainer:r,TwistyContainer:i})},_mgdn.b,_n.b,function(n){return new _n.b(n,_js.a.Instance.a(_n.c),_js.a.Instance.a(_a.e))},!1,!1,!1,0,_mgdn._TI.a);var k="GroupsNavigationTreeTemplates.GroupsTreeNodeHelperTemplate";new _A(k,function(){_mgdn._TI.a[k]===undefined&&(_mgdn._TI.a[k]=[[[-1,1,["ParentTreeNode"],[_mgdn._TI.bQ],null,"ParentTreeNode",null,_mgdn._TI.bX,1,null,null,null],[-1,1,["TreeLevel"],[_mgdn._TI.bR],null,"TreeLevel",null,_mgdn._TI.bY,1,null,null,0],[-1,1,["TreeContainer"],[_mgdn._TI.K],null,"TreeContainer",null,_mgdn._TI.Q,1,null,null,null],[-1,0,["GroupViewModel","Group","DisplayName"],[_mgdn._TI.d,_mgdn._TI.n,_mgdn._TI.j],null,"TreeNodeDisplayName",null,_mgdn._TI.bZ,1,null,null,null],[-1,0,["ContextMenuViewModel","IsShown"],[_mgdn._TI.q,_mgdn._TI.z],null,"ContextMenuShown",null,_mgdn._TI.bU,1,null,null,!1],[-1,0,["IsSelected"],[_mgdn._TI.cl],null,"IsSelected",null,_mgdn._TI.bW,1,null,null,!1],[-1,0,["TreeNodeTemplateId"],[_mgdn._TI.cm],null,"TemplateId",null,_mgdn._TI.bC,1,null,null,null],[-1,0,["CustomOnSelectionCommand"],[_mgdn._TI.ck],null,"CustomActivateTreeNodeSelectionCommand",null,_mgdn._TI.bV,0,null,null,null]]]);var s=_mgdn._TI._hf.childNodes[0].cloneNode(!0);var u=new _n.b(s.children[0],_js.a.Instance.a(_n.c),_js.a.Instance.a(_a.e));var o=new _fc.g;o.b=!0;var e=new _fc.c;e.D(_E.a(["ContextParent","ExpandCommand"],[_mgdn._TI.c,_mgdn._TI.M],null,"Command",null,_mgdn._TI.b,1));e.i("RIGHTARROW");var f=new _fc.c;f.D(_E.a(["ContextParent","CollapseCommand"],[_mgdn._TI.c,_mgdn._TI.L],null,"Command",null,_mgdn._TI.b,1));f.i("LEFTARROW");var n=new _fc.c;n.D(_E.a(["ContextParent","FocusOnPrevNodeCommand"],[_mgdn._TI.c,_mgdn._TI.O],null,"Command",null,_mgdn._TI.b,1));n.i("UPARROW");var r=new _fc.c;r.D(_E.a(["ContextParent","FocusOnNextNodeCommand"],[_mgdn._TI.c,_mgdn._TI.N],null,"Command",null,_mgdn._TI.b,1));r.i("DOWNARROW");var i=new _fc.c;i.D(_E.a(["ContextParent","SelectNodeCommand"],[_mgdn._TI.c,_mgdn._TI.l],null,"Command",null,_mgdn._TI.b,1));i.i("ENTER");var t=new _fc.c;t.D(_E.a(["ContextParent","SelectNodeCommand"],[_mgdn._TI.c,_mgdn._TI.l],null,"Command",null,_mgdn._TI.b,1));t.i("SPACE");o.a([e,f,n,r,i,t]);u.H([o]);return new _B(s,[u]).R({TreeNodeId:u})},_mgdn.a,_n.d,function(n){return new _n.d(n)},!1,!1,!1,0,_mgdn._TI.a);var p="GroupsNavigationTreeTemplates.GroupItemViewWithUnseenCount._tid9._tida";new _A(p,function(){_mgdn._TI.a[p]===undefined&&(_mgdn._TI.a[p]=[[[-1,0,["GroupViewModel","UnseenData","UnseenCount"],[_mgdn._TI.d,_mgdn._TI.co,_mgdn._TI.bu],null,"Text",null,_mgdn._TI.g,1,_mgdn._TI.bq(),null,null]]]);var n=_mgdn._TI._hf.childNodes[6].cloneNode(!0);var t=new _fc.a(n.children[0]);return new _B(n,[t])},_mgdn.a,_js.b,function(n){return new _js.b(n)},!1,!0,!1,0,_mgdn._TI.a);var w="GroupsNavigationTreeTemplates.GroupItemViewWithUnseenCount._tid9";new _A(w,function(){_mgdn._TI.a[w]===undefined&&(_mgdn._TI.a[w]=[null]);var t=_mgdn._TI._hf.childNodes[7].cloneNode(!0);var n=new _js.b(t.children[0]);n.w("GroupsNavigationTreeTemplates.GroupItemViewWithUnseenCount._tid9._tida");return new _B(t,[n])},_mgdn.a,_js.b,function(n){return new _js.b(n)},!1,!0,!1,0,_mgdn._TI.a);var h="GroupsNavigationTreeTemplates.GroupItemViewWithUnseenCount._tidb";new _A(h,function(){_mgdn._TI.a[h]===undefined&&(_mgdn._TI.a[h]=[[[-1,0,["GroupViewModel"],[_mgdn._TI.d],null,"DataContext",null,_mgdn._TI.i,1,null,null,null]]]);var t=_mgdn._TI._hf.childNodes[0].cloneNode(!0);var n=new _js.b(t.children[0]);n.w("NavigationTreeBootTemplates.NavigationItemActions");return new _B(t,[n])},_mgdn.a,_js.b,function(n){return new _js.b(n)},!1,!0,!1,0,_mgdn._TI.a);var i="GroupsNavigationTreeTemplates.GroupItemViewWithUnseenCount";new _A(i,function(){_mgdn._TI.a[i]===undefined&&(_mgdn._TI.a[i]=[[[-1,1,["IsTabbable"],[_mgdn._TI.P],null,"AriaTabIndex",null,_mgdn._TI.J,1,new _js.i([_mgdn._TI.f(),_mgdn._TI.C()],[null,0]),null,0],[-1,1,["TreeNodeAriaId"],[_mgdn._TI.bT],null,"AriaLabelledBy",null,_mgdn._TI.bG,1,_mgdn._TI.bn(),"name ucount",null],[-1,5,["HideNavigationActions"],[_mgdn._TI.B],null,"_mgdn_r",null,null,0,_mgdn._TI.f(),null,null],[-1,5,["ShowTreeNodeSelected"],[_mgdn._TI.h],null,"ms-bg-color-themeLight:_mgdn_s",null,null,1,null,null,null]],null,[[-1,0,["GroupViewModel","PersonaViewModel"],[_mgdn._TI.d,_mgdn._TI.bl],null,"DataContext",null,_mgdn._TI.i,1,null,null,null]],[[-1,0,["GroupViewModel","Group","DisplayName"],[_mgdn._TI.d,_mgdn._TI.n,_mgdn._TI.j],null,"Text",null,_mgdn._TI.g,1,null,null,null],[-1,0,["GroupViewModel","Group","DisplayName"],[_mgdn._TI.d,_mgdn._TI.n,_mgdn._TI.j],null,"Title",null,_mgdn._TI.A,1,null,null,null],[-1,5,["ShowTreeNodeSelected"],[_mgdn._TI.h],null,"_mgdn_f ms-fwt-sb ms-font-color-neutralPrimary:_mgdn_e ms-fwt-r ms-font-color-neutralSecondary",null,null,1,null,null,null]],[[-1,5,["ShowTreeNodeSelected"],[_mgdn._TI.h],null,"_mgdn_p",null,null,1,null,null,null]],[[-1,0,["NarratedCountString"],[_mgdn._TI.bk],null,"Text",null,_mgdn._TI.g,1,null,null,null],[-1,0,["NarratedCountString"],[_mgdn._TI.bk],null,"AriaHiddenState",null,_mgdn._TI.bF,1,_mgdn._TI.bm(),null,!1]],[[-1,0,["HideNavigationActions"],[_mgdn._TI.B],null,"IsHidden",null,_mgdn._TI.e,0,null,null,!0],[-1,5,["ShowTreeNodeSelected"],[_mgdn._TI.h],null,"ms-bg-color-themeLight:_mgdn_c",null,null,1,null,null,null]]]);var n=_mgdn._TI._hf.childNodes[8].cloneNode(!0);var e=new _js.b(_B.a(n,[0,0,1]));e.w("GroupsNavigationTreeTemplates.GroupItemViewWithUnseenCount._tidb");var u=new _fc.a(_B.a(n,[0,0,0,3]));u.M(!0);u.be("ucount");u.I(41);var o=new _js.b(_B.a(n,[0,0,0,2]));o.w("GroupsNavigationTreeTemplates.GroupItemViewWithUnseenCount._tid9");var f=new _fc.a(_B.a(n,[0,0,0,1,0]));f.be("name");f.I(41);var s=new _pe.b(_B.a(n,[0,0,0,0,0]),_js.a.Instance.a(_a.m));s.w("PersonaView.DisplayPicturePopup");var h=new _js.c(_B.a(n,[0,0]));var r=new _js.c(n.children[0]);r.I(25);var t=new _fce.e(_js.a.Instance.a(_fc.e),_js.a.Instance.a(_ff.c),_js.a.Instance.a(_ff.a),_js.a.Instance.a(_ff.b));t.A(_E.a(["ContextMenuViewModel"],[_mgdn._TI.q],null,"MenuDataContext",null,_mgdn._TI.H,1)).A(_E.a(["ContextMenuViewModel","IsShown"],[_mgdn._TI.q,_mgdn._TI.z],_mgdn._TI.I,"IsShown",_mgdn._TI.F,_mgdn._TI.G,2,null,null,!1));t.a=2;t.b=5;r.H([t]);return new _B(n,[r,h,s,f,o,u,e]).R({TreeNodeLabel:r,TreeNodeContainer:h})},_mgdn.a,_n.b,function(n){return new _n.b(n,_js.a.Instance.a(_n.c),_js.a.Instance.a(_a.e))},!1,!1,!1,0,_mgdn._TI.a);var r="GroupsNavigationTreeTemplates.GroupItemViewWithoutUnseenCount._tidc";new _A(r,function(){_mgdn._TI.a[r]===undefined&&(_mgdn._TI.a[r]=[[[-1,0,["GroupViewModel"],[_mgdn._TI.d],null,"DataContext",null,_mgdn._TI.i,1,null,null,null]]]);var t=_mgdn._TI._hf.childNodes[0].cloneNode(!0);var n=new _js.b(t.children[0]);n.w("NavigationTreeBootTemplates.NavigationItemActions");return new _B(t,[n])},_mgdn.a,_js.b,function(n){return new _js.b(n)},!1,!0,!1,0,_mgdn._TI.a);var n="GroupsNavigationTreeTemplates.GroupItemViewWithoutUnseenCount";new _A(n,function(){_mgdn._TI.a[n]===undefined&&(_mgdn._TI.a[n]=[[[-1,1,["IsTabbable"],[_mgdn._TI.P],null,"AriaTabIndex",null,_mgdn._TI.J,1,new _js.i([_mgdn._TI.f(),_mgdn._TI.C()],[null,0]),null,0],[-1,0,["GroupViewModel","Group","DisplayName"],[_mgdn._TI.d,_mgdn._TI.n,_mgdn._TI.j],null,"AriaLabel",null,_mgdn._TI.k,1,null,null,null],[-1,5,["ShowTreeNodeSelected"],[_mgdn._TI.h],null,"ms-bg-color-themeLight:_mgdn_s",null,null,1,null,null,null],[-1,5,["HideNavigationActions"],[_mgdn._TI.B],null,"_mgdn_r",null,null,0,_mgdn._TI.f(),null,null]],null,[[-1,0,["GroupViewModel","PersonaViewModel"],[_mgdn._TI.d,_mgdn._TI.bl],null,"DataContext",null,_mgdn._TI.i,1,null,null,null]],[[-1,0,["GroupViewModel","Group","DisplayName"],[_mgdn._TI.d,_mgdn._TI.n,_mgdn._TI.j],null,"Text",null,_mgdn._TI.g,1,null,null,null],[-1,0,["GroupViewModel","Group","DisplayName"],[_mgdn._TI.d,_mgdn._TI.n,_mgdn._TI.j],null,"Title",null,_mgdn._TI.A,1,null,null,null],[-1,5,["ShowTreeNodeSelected"],[_mgdn._TI.h],null,"_mgdn_f ms-fwt-sb ms-font-color-neutralPrimary:_mgdn_e ms-fwt-r ms-font-color-neutralSecondary",null,null,1,null,null,null]],[[-1,0,["HideNavigationActions"],[_mgdn._TI.B],null,"IsHidden",null,_mgdn._TI.e,0,null,null,!0],[-1,5,["ShowTreeNodeSelected"],[_mgdn._TI.h],null,"ms-bg-color-themeLight:_mgdn_c",null,null,1,null,null,null]]]);var t=_mgdn._TI._hf.childNodes[9].cloneNode(!0);var u=new _js.b(_B.a(t,[0,0,1]));u.w("GroupsNavigationTreeTemplates.GroupItemViewWithoutUnseenCount._tidc");var o=new _fc.a(_B.a(t,[0,0,0,1,0]));var f=new _pe.b(_B.a(t,[0,0,0,0,0]),_js.a.Instance.a(_a.m));f.w("PersonaView.DisplayPicturePopup");var e=new _js.c(_B.a(t,[0,0]));var r=new _js.c(t.children[0]);r.I(25);var i=new _fce.e(_js.a.Instance.a(_fc.e),_js.a.Instance.a(_ff.c),_js.a.Instance.a(_ff.a),_js.a.Instance.a(_ff.b));i.A(_E.a(["ContextMenuViewModel"],[_mgdn._TI.q],null,"MenuDataContext",null,_mgdn._TI.H,1)).A(_E.a(["ContextMenuViewModel","IsShown"],[_mgdn._TI.q,_mgdn._TI.z],_mgdn._TI.I,"IsShown",_mgdn._TI.F,_mgdn._TI.G,2,null,null,!1));i.a=2;i.b=5;r.H([i]);return new _B(t,[r,e,f,o,u]).R({TreeNodeLabel:r,TreeNodeContainer:e})},_mgdn.a,_n.b,function(n){return new _n.b(n,_js.a.Instance.a(_n.c),_js.a.Instance.a(_a.e))},!1,!1,!1,0,_mgdn._TI.a);var t="GroupsNavigationTreeTemplates.MoreGroups._tidd";new _A(t,function(){_mgdn._TI.a[t]===undefined&&(_mgdn._TI.a[t]=[[[-1,4,null,null,null,"Text",null,_mgdn._TI.g,0,null,null,null,_u.R.FW],[-1,4,null,null,null,"Title",null,_mgdn._TI.A,0,null,null,null,_u.R.FW],[-1,5,["GroupViewModel","HasUnseenData"],[_mgdn._TI.d,_mgdn._TI.cn],null,"ms-font-color-neutralPrimary:ms-font-color-neutralSecondary",null,null,0,null,null,null]],[[-1,4,null,null,null,"ImageId",null,_mgdn._TI.y,0,null,null,null,_n.a.bi()],[-1,4,null,null,null,"PressedImageId",null,_mgdn._TI.E,0,null,null,null,_n.a.bC()],[-1,4,null,null,null,"HoveredImageId",null,_mgdn._TI.D,0,null,null,null,_n.a.bB()]]]);var n=_mgdn._TI._hf.childNodes[10].cloneNode(!0);var r=new _fc.b(n.children[1]);var i=new _fc.a(n.children[0]);return new _B(n,[i,r])},_mgdn.f,_js.b,function(n){return new _js.b(n)},!1,!0,!1,0,_mgdn._TI.a);var u="GroupsNavigationTreeTemplates.MoreGroups";new _A(u,function(){_mgdn._TI.a[u]===undefined&&(_mgdn._TI.a[u]=[[[-1,4,null,null,null,"AriaLabel",null,_mgdn._TI.k,0,null,null,null,_u.R.FW],[-1,1,["IsTabbable"],[_mgdn._TI.P],null,"AriaTabIndex",null,_mgdn._TI.J,1,new _js.i([_mgdn._TI.f(),_mgdn._TI.C()],[null,0]),null,0],[-1,5,["ShowTreeNodeSelected"],[_mgdn._TI.h],null,"ms-bg-color-themeLight:_mgdn_s",null,null,1,null,null,null]],null]);var i=_mgdn._TI._hf.childNodes[11].cloneNode(!0);var t=new _js.b(_B.a(i,[0,0]));t.w("GroupsNavigationTreeTemplates.MoreGroups._tidd");var n=new _js.c(i.children[0]);n.I(25);return new _B(i,[n,t]).R({TreeNodeLabel:n,TreeNodeContainer:t})},_mgdn.f,_n.b,function(n){return new _n.b(n,_js.a.Instance.a(_n.c),_js.a.Instance.a(_a.e))},!1,!1,!1,0,_mgdn._TI.a);var o="GroupsNavigationView";new _A(o,function(){_mgdn._TI.a[o]===undefined&&(_mgdn._TI.a[o]=[null,[[-1,5,["DataContext"],[_mgdn._TI.U],null,"_mgdn_w",null,null,1,_mgdn._TI.bp(),null,null]],[[-1,0,["GroupsViewModel"],[_mgdn._TI.cd],null,"DataContext",null,_mgdn._TI.i,1,null,null,null]],[[-1,0,["SecondLevelGroupsForest"],[_mgdn._TI.ce],null,"DataSource",null,_mgdn._TI.bN,1,null,null,null],[-1,0,["SelectedSecondLevelGroupsTree"],[_mgdn._TI.cf],_mgdn._TI.cg,"SelectedTreeData",_mgdn._TI.bM,_mgdn._TI.bO,2,null,null,null]]]);var n=_mgdn._TI._hf.childNodes[12].cloneNode(!0);var r=new _n.z(_B.a(n,[1,1]),_js.a.Instance.a(_n.c));var i=new _js.b(_B.a(n,[1,0]));i.w("GroupsView.GroupFunctionsTemplate");var u=new _fce.f(n.children[1],_js.a.Instance.a(_js.h),_js.a.Instance.a(_ff.a),_js.a.Instance.a(_ff.c));var t=new _n.P(n.children[0],_js.a.Instance.a(_a.e));t.w("NavigationTreeBootTemplates.BackNavigationHeader");return new _B(n,[t,u,i,r]).b(r)},_mgdn.e,_js.b,function(n){return new _js.b(n)},!0,!1,!1,0,_mgdn._TI.a);var s="GroupsTreeView.TreeRootNodeHelperTemplate";new _A(s,function(){_mgdn._TI.a[s]===undefined&&(_mgdn._TI.a[s]=[[[-1,1,["TreeContainer"],[_mgdn._TI.K],null,"TreeContainer",null,_mgdn._TI.Q,1,null,null,null],[-1,0,["IsCollapsed"],[_mgdn._TI.p],_mgdn._TI.bi,"IsCollapsed",_mgdn._TI.o,_mgdn._TI.W,2,null,null,!1],[-1,0,["TreeLabel"],[_mgdn._TI.m],null,"AriaLabel",null,_mgdn._TI.k,1,null,null,null]],[[-1,0,["IsCollapsed"],[_mgdn._TI.p],null,"IsHidden",null,_mgdn._TI.e,1,null,null,!0]],[[-1,0,["GroupViewModels","Count"],[_mgdn._TI.ci,_mgdn._TI.bD],null,"IsHidden",null,_mgdn._TI.e,1,null,null,!0],[-1,0,["EmptyText"],[_mgdn._TI.ch],null,"Text",null,_mgdn._TI.g,1,null,null,null]]]);var t=_mgdn._TI._hf.childNodes[13].cloneNode(!0);var c=new _fc.a(_B.a(t,[1,0]));var l=new _js.c(t.children[1]);var n=new _n.b(t.children[0],_js.a.Instance.a(_n.c),_js.a.Instance.a(_a.e));n.r(!0);n.bg(!0);n.C(-1);n.w("GroupsNavigationTreeTemplates.TreeHeaderView");var o=new _fc.g;o.b=!0;var h=new _fc.c;h.D(_E.a(["ContextParent","ExpandCommand"],[_mgdn._TI.c,_mgdn._TI.M],null,"Command",null,_mgdn._TI.b,1));h.i("RIGHTARROW");var e=new _fc.c;e.D(_E.a(["ContextParent","CollapseCommand"],[_mgdn._TI.c,_mgdn._TI.L],null,"Command",null,_mgdn._TI.b,1));e.i("LEFTARROW");var i=new _fc.c;i.D(_E.a(["ContextParent","FocusOnPrevNodeCommand"],[_mgdn._TI.c,_mgdn._TI.O],null,"Command",null,_mgdn._TI.b,1));i.i("UPARROW");var r=new _fc.c;r.D(_E.a(["ContextParent","FocusOnNextNodeCommand"],[_mgdn._TI.c,_mgdn._TI.N],null,"Command",null,_mgdn._TI.b,1));r.i("DOWNARROW");var f=new _fc.c;f.D(_E.a(["ContextParent","SelectNodeCommand"],[_mgdn._TI.c,_mgdn._TI.l],null,"Command",null,_mgdn._TI.b,1));f.i("ENTER");var u=new _fc.c;u.D(_E.a(["ContextParent","SelectNodeCommand"],[_mgdn._TI.c,_mgdn._TI.l],null,"Command",null,_mgdn._TI.b,1));u.i("SPACE");o.a([h,e,i,r,f,u]);n.H([o]);return new _B(t,[n,l,c]).R({TreeNodeId:n})},_mgdn.b,_n.d,function(n){return new _n.d(n)},!1,!1,!1,0,_mgdn._TI.a);var f="GroupsTreeView";new _A(f,function(){_mgdn._TI.a[f]===undefined&&(_mgdn._TI.a[f]=[[[-1,1,["DataContext"],[_mgdn._TI.U],null,"DataSource",null,_mgdn._TI.Z,1,null,null,null],[-1,1,["ForestContainer"],[_mgdn._TI.bP],null,"ForestContainer",null,_mgdn._TI.ca,1,null,null,null],[-1,0,["SelectedGroupTreeNode"],[_mgdn._TI.bh],_mgdn._TI.bj,"SelectedTreeNodeData",_mgdn._TI.X,_mgdn._TI.ba,2,null,null,null],[-1,0,["ActivateGroupSelectionCommand"],[_mgdn._TI.bf],null,"ActivateTreeNodeSelectionCommand",null,_mgdn._TI.Y,0,null,null,null],[-1,0,["TreeLabel"],[_mgdn._TI.m],null,"AriaLabel",null,_mgdn._TI.k,1,null,null,null],[-1,5,["HideTree"],[_mgdn._TI.cj],null,"hidden",null,null,0,null,null,null]]]);var t=_mgdn._TI._hf.childNodes[14].cloneNode(!0);var n=new _n.l(t.children[0]);n.e(0);n.b("GroupsTreeView.TreeRootNodeHelperTemplate");n.I(33);return new _B(t,[n])},_mgdn.b,_n.i,function(n){return new _n.i(n)},!0,!1,!1,0,_mgdn._TI.a);var e="GroupsNavigationCTQLoggerView";new _A(e,function(){_mgdn._TI.a[e]===undefined&&(_mgdn._TI.a[e]=[null]);var n=_mgdn._TI._hf.childNodes[15].cloneNode(!0);var t=new _js.b(n.children[0]);return new _B(n,[t])},Object,_mgdn.d,function(n){return new _mgdn.d(n)},!0,!1,!1,0,_mgdn._TI.a)};_mgdn._TI.br=function(){var n=window.document.createElement("DIV");n.innerHTML="<div> <div></div> </div><div> <div></div> <div></div> </div><div> <div> </div>  </div><div> <div class='_mgdn_u'></div> </div><div> <div tabindex=\"0\" class='treeHeaderContainer'> <div></div> <span autoid=\"_mgdn_0\" role=\"tree\" class='firstHeaderTreeNodeRow nowrap'> <span> <button autoid=\"_mgdn_1\" type='button' class='firstLevelTwisty ms-font-weight-regular'></button> </span> <span autoid=\"_mgdn_2\" class='firstLevelFolderHead ms-font-weight-semilight ms-font-color-neutralPrimary ms-font-l'>  </span> </span> <button type='button' class='newNodeBtn _mgdn_t'></button> <span> <button type='button' class='_mgdn_j'></button> </span> <div></div> </div> <div></div> </div><div> <div tabindex=\"0\"> <div role=\"tree\" class='_mgdn_3 nowrap'> <span> <span class='_mgdn_4'></span> </span> <span class='folderHead _mgdn_5 ms-font-weight-semilight ms-font-color-neutralPrimary'></span> </div> </div> <div></div> </div><div> <span class='_mgdn_g ms-fwt-sb ms-font-color-themePrimary'></span> </div><div>  <div class='_mgdn_l'></div> </div><div> <div class='_mgdn_6'> <div class='_mgdn_7'> <div CssClass=\"itemDetails\"> <div pictureSize=\"30\"> <span autoid=\"_mgdn_3\" class='_mgdn_9'></span> </div> <div class='_mgdn_o'> <span autoid=\"_mgdn_4\" class='_mgdn_d'></span> </div> <div></div>  <span></span> </div> <div class='_mgdn_b'></div> </div>  </div> <div class='_mgdn_8'></div> </div><div> <div class='_mgdn_6'> <div class='_mgdn_7'> <div> <div pictureSize=\"30\"> <span autoid=\"_mgdn_5\" class='_mgdn_9'></span> </div> <div class='_mgdn_o'> <span autoid=\"_mgdn_6\" class='_mgdn_d'></span> </div> </div> <div class='_mgdn_b'></div> </div>  </div> <div class='_mgdn_8'></div> </div><div> <span autoid=\"_mgdn_7\" class='_mgdn_i ms-font-weight-regular ms-font-color-themePrimary'></span>  <button type='button' class='_mgdn_q ms-font-weight-regular ms-font-color-neutralSecondary'></button> </div><div> <div class='_mgdn_6'> <div class='_mgdn_h'></div> </div> <div class='_mgdn_8'></div> </div><div> <div></div> <div autoid=\"_mgdn_8\" class='_mgdn_v _mgdn_y'>  <div class='_mgdn_z'></div> <div class='_mgdn_x'> </div> </div> </div><div> <div></div>  <div> <span class='_mgdn_B ms-font-weight-regular ms-font-color-neutralSecondary'></span> </div> </div><div> <div class='_mgdn_A'> </div>  </div><div> <div class='_mgdn_C'></div> </div>";_js.c.a().appendChild(n);return n};_mgdn._TI.bc=function(n){return n.g.i};_mgdn._TI.S=function(n){return n.f()};_mgdn._TI.p=function(n){return n.h};_mgdn._TI.o=function(n){return n.c()};_mgdn._TI.K=function(n){return n.c()};_mgdn._TI.c=function(n){return n.L};_mgdn._TI.M=function(n){return _n.b.isInstanceOfType(n)?n.bo:null};_mgdn._TI.L=function(n){return _n.b.isInstanceOfType(n)?n.bx:null};_mgdn._TI.O=function(n){return _n.b.isInstanceOfType(n)?n.bI:null};_mgdn._TI.N=function(n){return _n.b.isInstanceOfType(n)?n.bH:null};_mgdn._TI.l=function(n){return _n.b.isInstanceOfType(n)?n.by:null};_mgdn._TI.R=function(n){return n.l};_mgdn._TI.bh=function(n){return n.f};_mgdn._TI.X=function(n){return n.f};_mgdn._TI.bf=function(n){return n.q};_mgdn._TI.m=function(n){return n.w};_mgdn._TI.bb=function(n){return n.z()};_mgdn._TI.z=function(n){return n.i};_mgdn._TI.F=function(n){return n.c()};_mgdn._TI.cc=function(n){return n.j};_mgdn._TI.cb=function(n){return n.o};_mgdn._TI.be=function(n){return n.k};_mgdn._TI.bd=function(n){return n.g.r};_mgdn._TI.T=function(n){return n.c()};_mgdn._TI.bs=function(n){return n.b()};_mgdn._TI.bK=function(n){return n.c()};_mgdn._TI.bE=function(n){return n.y};_mgdn._TI.bg=function(n){return n.b};_mgdn._TI.bS=function(n){return n.bC};_mgdn._TI.d=function(n){return n.b};_mgdn._TI.n=function(n){return n.j};_mgdn._TI.j=function(n){return n.bh.DisplayName};_mgdn._TI.q=function(n){return n.n()};_mgdn._TI.cl=function(n){return n.c};_mgdn._TI.cm=function(n){return n.p()};_mgdn._TI.ck=function(n){return n.o()};_mgdn._TI.bQ=function(n){return n.d()};_mgdn._TI.bR=function(n){return n.g()};_mgdn._TI.co=function(n){return n.j.unseenData};_mgdn._TI.bu=function(n){return n.bh.UnseenCount};_mgdn._TI.P=function(n){return n.ca()};_mgdn._TI.bT=function(n){return n.co};_mgdn._TI.B=function(n){return n.a.v};_mgdn._TI.h=function(n){return n.bm};_mgdn._TI.bl=function(n){return n.m};_mgdn._TI.bk=function(n){return n.e};_mgdn._TI.cn=function(n){return n.O()};_mgdn._TI.U=function(n){return n.E()};_mgdn._TI.cd=function(n){return n.i};_mgdn._TI.ce=function(n){return n.v};_mgdn._TI.cf=function(n){return n.p};_mgdn._TI.bM=function(n){return n.e};_mgdn._TI.ci=function(n){return n.c};_mgdn._TI.bD=function(n){return n.y.length};_mgdn._TI.ch=function(n){return n.r};_mgdn._TI.bP=function(n){return n.a};_mgdn._TI.cj=function(n){return n.E()};_mgdn._TI.i=function(n,t){n.X(t)};_mgdn._TI.e=function(n,t){n.M(t)};_mgdn._TI.bi=function(n,t){n.H(t)};_mgdn._TI.W=function(n,t){n.t(t)};_mgdn._TI.Q=function(n,t){n.bN(t)};_mgdn._TI.b=function(n,t){n.k=t};_mgdn._TI.Z=function(n,t){n.h(t)};_mgdn._TI.bj=function(n,t){n.m(t)};_mgdn._TI.ba=function(n,t){n.g(t)};_mgdn._TI.Y=function(n,t){n.k(t)};_mgdn._TI.y=function(n,t){n.i(t)};_mgdn._TI.E=function(n,t){n.r(t)};_mgdn._TI.D=function(n,t){n.k(t)};_mgdn._TI.by=function(n,t){n.v(t)};_mgdn._TI.bB=function(n,t){n.bI(t)};_mgdn._TI.bz=function(n,t){n.bg(t)};_mgdn._TI.bA=function(n,t){n.m(t)};_mgdn._TI.g=function(n,t){n.a(t)};_mgdn._TI.k=function(n,t){n.W(t)};_mgdn._TI.H=function(n,t){n.d(t)};_mgdn._TI.I=function(n,t){n.j(t)};_mgdn._TI.G=function(n,t){n.e(t)};_mgdn._TI.bv=function(n,t){n.ba(t)};_mgdn._TI.A=function(n,t){n.bw(t)};_mgdn._TI.bw=function(n,t){n.h(t)};_mgdn._TI.bJ=function(n,t){n.b(t)};_mgdn._TI.bI=function(n,t){n.l(t)};_mgdn._TI.bt=function(n,t){n.a(t)};_mgdn._TI.bL=function(n,t){n.e(t)};_mgdn._TI.bH=function(n,t){n.d(t)};_mgdn._TI.V=function(n,t){n.e(t)};_mgdn._TI.bx=function(n,t){n.a(t)};_mgdn._TI.bZ=function(n,t){n.cz(t)};_mgdn._TI.bU=function(n,t){n.da(t)};_mgdn._TI.bW=function(n,t){n.bb(t)};_mgdn._TI.bC=function(n,t){n.w(t)};_mgdn._TI.bV=function(n,t){n.fi(t)};_mgdn._TI.bX=function(n,t){n.bL(t)};_mgdn._TI.bY=function(n,t){n.bO(t)};_mgdn._TI.J=function(n,t){n.C(t)};_mgdn._TI.bG=function(n,t){n.Y(t)};_mgdn._TI.bF=function(n,t){n.N(t)};_mgdn._TI.bN=function(n,t){n.h(t)};_mgdn._TI.cg=function(n,t){n.x(t)};_mgdn._TI.bO=function(n,t){n.i(t)};_mgdn._TI.ca=function(n,t){n.a=t};_mgdn._TI.f=function(){_mgdn._TI.r||(_mgdn._TI.r=new _fc.k);return _mgdn._TI.r};_mgdn._TI.bo=function(){_mgdn._TI.u||(_mgdn._TI.u=new _n.D);return _mgdn._TI.u};_mgdn._TI.bq=function(){_mgdn._TI.x||(_mgdn._TI.x=new _mgn.q);return _mgdn._TI.x};_mgdn._TI.C=function(){_mgdn._TI.v||(_mgdn._TI.v=new _n.r);return _mgdn._TI.v};_mgdn._TI.bn=function(){_mgdn._TI.t||(_mgdn._TI.t=new _n.A);return _mgdn._TI.t};_mgdn._TI.bm=function(){_mgdn._TI.s||(_mgdn._TI.s=new _fc.n);return _mgdn._TI.s};_mgdn._TI.bp=function(){_mgdn._TI.w||(_mgdn._TI.w=new _n.bb);return _mgdn._TI.w};ModernGroupsDesktopNavigationComponent.registerClass("ModernGroupsDesktopNavigationComponent",null,_a.ih);_mgdn.b.registerClass("_mgdn.b",_a.bx);_mgdn.c.registerClass("_mgdn.c",_mgdn.b);_mgdn.e.registerClass("_mgdn.e",_a.bx,_y.dq,_js.z,_y.hq,_y.eh,_y.fH);_mgdn.a.registerClass("_mgdn.a",_a.bx);_mgdn.f.registerClass("_mgdn.f",_mgdn.a);_mgdn.d.registerClass("_mgdn.d",_js.b);_mgdn._TI.registerClass("_mgdn._TI");ModernGroupsDesktopNavigationComponent.$$cctor();_mgdn.d.a=150;_mgdn._TI._hf=_mgdn._TI.br();_mgdn._TI.r=null;_mgdn._TI.u=null;_mgdn._TI.x=null;_mgdn._TI.v=null;_mgdn._TI.t=null;_mgdn._TI.s=null;_mgdn._TI.w=null;_mgdn._TI.a={};_mgdn._TI.$$cctor();
window.scriptsLoaded['microsoft.owa.moderngroupsdesktopnavigation.js'] = 1; window.scriptProcessEnd = window.scriptProcessEnd || {}; window.scriptProcessEnd['microsoft.owa.moderngroupsdesktopnavigation.js'] = (new Date()).getTime(); } catch(e) { window.owaLastErrorReported = e; throw e; }
