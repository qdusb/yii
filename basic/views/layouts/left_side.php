<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

	<div
		id="m_ver_menu"
		class="m-aside-menu  m-aside-menu--skin-dark"
		m-menu-vertical="1"
		m-menu-scrollable="0" m-menu-dropdown-timeout="500"
	>
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
			<li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
				<a  href="<{$http_root_www}>?con=admin&ctl=index" class="m-menu__link ">
					<i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">
                                首页
                            </span>
                        </span>
                    </span>
				</a>
			</li>


			<!--<{foreach from=$left_menus item=item key=key}>
			<li class="m-menu__item  m-menu__item--submenu <{$item.open_class}>" aria-haspopup="true"  m-menu-submenu-toggle="hover">
				<{if !$item.hide}>
				<a  href="javascript:void(0);" class="m-menu__link  m-menu__toggle">
					<i class="m-menu__link-icon flaticon-layers"></i>
                        <span class="m-menu__link-text">
                             <{$item.name}>
                        </span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<{/if}>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<{foreach from=$item.child item=sub key=subkey}>
						<{if !$sub.hide}>
						<li class="m-menu__item <{$sub.active_class}>" aria-haspopup="true" >
							<a  href='<{$sub.url}>&menu=<{$sub.id}>' data="<{$sub.url}>" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
                                        <span class="m-menu__link-text">
                                            <{$sub.name}>
                                        </span>
							</a>
						</li>
						<{/if}>
						<{/foreach}>
					</ul>
				</div>

			</li>
			<{/foreach}>-->


			<li class="m-menu__section">
				<h4 class="m-menu__section-text">
					隐藏管理
				</h4>
				<i class="m-menu__section-icon flaticon-more-v3"></i>
			</li>
			<!--<{if $super_menus}>
			<{foreach from=$super_menus item=item key=key}>
			<li class="m-menu__item m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
				<{if !$item.hide}>
				<a  href="javascript:void(0);" class="m-menu__link  m-menu__toggle">
					<i class="m-menu__link-icon flaticon-layers"></i>
                        <span class="m-menu__link-text">
                             <{$item.name}>
                        </span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<{/if}>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<{foreach from=$item.child item=sub key=subkey}>
						<{if !$sub.hide}>
						<li class="m-menu__item <{$sub.active_class}>" aria-haspopup="true" >
							<a  href='<{$sub.url}>&menu=<{$sub.id}>' data="<{$sub.url}>" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
                                        <span class="m-menu__link-text">
                                            <{$sub.name}>
                                        </span>
							</a>
						</li>
						<{/if}>
						<{/foreach}>
					</ul>
				</div>

			</li>
			<{/foreach}>

			<{/if}>-->

		</ul>
	</div>
</div>
