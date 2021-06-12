<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
            {{ trans('panel.site_title') }}
        </a>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
                            {{ trans('panel.site_title') }}
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Divider -->
            <hr class="mb-6 md:min-w-full" />
            <!-- Heading -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="{{ route("admin.home") }}" class="{{ request()->is("admin") ? "sidebar-nav-active" : "sidebar-nav" }}">
                        <i class="fas fa-tv"></i>
                        {{ trans('global.dashboard') }}
                    </a>
                </li>

                @can('user_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/permissions*")||request()->is("admin/roles*")||request()->is("admin/users*")||request()->is("admin/audit-logs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas fa-users c-sidebar-nav-icon">
                            </i>
                            {{ trans('cruds.userManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('permission_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/permissions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.permissions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-unlock-alt">
                                        </i>
                                        {{ trans('cruds.permission.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/roles*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.roles.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                        </i>
                                        {{ trans('cruds.role.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.users.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user">
                                        </i>
                                        {{ trans('cruds.user.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/audit-logs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.audit-logs.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-file-alt">
                                        </i>
                                        {{ trans('cruds.auditLog.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('template_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/templates*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.templates.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.template.title') }}
                        </a>
                    </li>
                @endcan
                @can('contract_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/contracts*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.contracts.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                            </i>
                            {{ trans('cruds.contract.title') }}
                        </a>
                    </li>
                @endcan
                @can('person_access')
                    <li class="items-center">
                        <a class="{{ request()->is("admin/people*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.people.index") }}">
                            <i class="fa-fw c-sidebar-nav-icon fas fa-user-alt">
                            </i>
                            {{ trans('cruds.person.title') }}
                        </a>
                    </li>
                @endcan
                @can('contact_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/contact-companies*")||request()->is("admin/contact-contacts*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas fa-users c-sidebar-nav-icon">
                            </i>
                            {{ trans('cruds.contactManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('contact_company_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/contact-companies*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.contact-companies.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-building">
                                        </i>
                                        {{ trans('cruds.contactCompany.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('contact_contact_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/contact-contacts*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.contact-contacts.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user-plus">
                                        </i>
                                        {{ trans('cruds.contactContact.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('basic_c_r_m_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/crm-statuses*")||request()->is("admin/crm-customers*")||request()->is("admin/crm-notes*")||request()->is("admin/crm-documents*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas fa-users c-sidebar-nav-icon">
                            </i>
                            {{ trans('cruds.basicCRM.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('crm_status_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/crm-statuses*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.crm-statuses.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-folder">
                                        </i>
                                        {{ trans('cruds.crmStatus.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('crm_customer_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/crm-customers*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.crm-customers.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user-plus">
                                        </i>
                                        {{ trans('cruds.crmCustomer.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('crm_note_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/crm-notes*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.crm-notes.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-sticky-note">
                                        </i>
                                        {{ trans('cruds.crmNote.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('crm_document_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/crm-documents*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.crm-documents.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-folder">
                                        </i>
                                        {{ trans('cruds.crmDocument.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="items-center">
                            <a href="{{ route("profile.password.edit") }}" class="{{ request()->is("profile/password") || request()->is("profile/password/*") ? "sidebar-nav-active" : "sidebar-nav" }}">
                                <i class="fas fa-cogs"></i>
                                {{ trans('global.change_password') }}
                            </a>
                        </li>
                    @endcan
                @endif

                <li class="items-center">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();" class="sidebar-nav">
                        <i class="fa-fw fas fa-sign-out-alt"></i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>