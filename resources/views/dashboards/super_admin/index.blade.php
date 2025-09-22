@extends('layouts.dashboard')

@section('title', 'SeekYu - Super Admin Dashboard')

@section('dashboard-content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Admin Dashboard</title>
</head>
<body>
    <section class="p-10 m-6 bg-white rounded-lg shadow-md" id="dashboard">
        <h1 class="text-3xl font-bold mb-2">Super Admin Management Dashboard</h1>
        <p class="mb-6">Welcome to your security management portal. Monitor and manage all security operations from here.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Active Guards -->
            <div class="bg-blue-100 p-6 rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="bg-blue-300 p-3 rounded-full">
                        <i class="fa-solid fa-user-shield text-blue-600 text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-2xl font-bold">1,234</p>
                        <h2 class="text-lg font-semibold">Active Guards</h2>
                    </div>
                </div>
            </div>

            <!-- Active Clients -->
            <div class="bg-green-100 p-6 rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="bg-green-300 p-3 rounded-full">
                        <i class="fa-solid fa-users text-green-600 text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-2xl font-bold">1,234</p>
                        <h2 class="text-lg font-semibold">Active Clients</h2>
                    </div>
                </div>
            </div>

            <!-- Pending Request -->
            <div class="bg-yellow-100 p-6 rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="bg-yellow-300 p-3 rounded-full">
                        <i class="fa-solid fa-clipboard-list text-yellow-600 text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-2xl font-bold">1,234</p>
                        <h2 class="text-lg font-semibold">Pending Request</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Recent Activities --}}
    <section class="p-10 m-6 bg-white rounded-lg shadow-md" id="recent-activities">
        <h1 class="text-3xl font-bold mb-6">Recent Activities</h1>

        {{-- Table Content --}}
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white text-left">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Name</th>
                        <th class="py-2 px-4 border-b text-center">Assigned By</th>
                        <th class="py-2 px-4 border-b text-center">Date</th>
                        <th class="py-2 px-4 border-b text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">John Doe</td>
                        <td class="py-2 px-4 border-b text-center">HR</td>
                        <td class="py-2 px-4 border-b text-center">2023-10-01</td>
                        <td class="py-2 px-4 border-b text-center">New Registered</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">Client XYZ</td>
                        <td class="py-2 px-4 border-b text-center">Admin</td>
                        <td class="py-2 px-4 border-b text-center">2023-10-02</td>
                        <td class="py-2 px-4 border-b text-center">New Account</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">Jane Smith</td>
                        <td class="py-2 px-4 border-b text-center">Super Admin</td>
                        <td class="py-2 px-4 border-b text-center">2023-10-03</td>
                        <td class="py-2 px-4 border-b text-center">Pending Approval</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- Account Management --}}
    <section class="p-10 m-6 bg-white rounded-lg shadow-md" id="account-management">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold">Account Management</h2>            
            <div class="space-x-2 grid grid-cols-1 md:grid-cols-3 text-center">
                <a href="#create-account" class="bg-green-300 px-4 py-2 rounded">Create Account</a>
                <a href="#view-accounts" class="bg-gray-200 px-4 py-2 rounded hover:bg-blue-300">View Accounts</a>
                <a href="#removed-accounts" class="bg-gray-200 px-4 py-2 rounded hover:bg-red-300">Removed Accounts</a>
            </div>
        </div>

       {{-- Create Account Form --}}
        <form class="grid grid-cols-1 md:grid-cols-2 gap-4" action="" id="create-account">
            <div>
                <label class="block text-md text-slate-600 mb-2">Full Name</label>
                <input class="w-full px-3 py-2 border rounded bg-slate-50" type="text" name="Full Name" placeholder=" " id="fullName" required>
            </div>
            <div>
                <label class="block text-md text-slate-600 mb-2">Username</label>
                <input class="w-full px-3 py-2 border rounded bg-slate-50" type="text" name="Full Name" placeholder=" " id="fullName" required>
            </div>
            <div class="mt-3">
                <label class="block text-md text-slate-600 mb-2">Role</label>
                <select class="w-full px-3 py-2 border rounded bg-slate-50">
                    <option value="" disabled selected>--Select Role--</option>
                    <option value="super_admin">Super Admin</option>
                    <option value="admin">Admin</option>
                    <option value="hr">HR</option>
                    <option value="guard">Guard</option>
                    <option value="client">Client</option>
                </select>
            </div>
            <div class="mt-3">
                <label class="block text-md text-slate-600 mb-2">Password</label>
                <input class="w-full px-3 py-2 border rounded bg-slate-50" type="password" name="Full Name" placeholder=" " id="fullName" required>
            </div>
            <div class="md:col-span-2 text-right mt-4">
                <button class="bg-gray-300 text-black px-6 py-2 rounded hover:bg-green-400">Create Account</button>
                <button class="bg-gray-300 text-black px-6 py-2 rounded hover:bg-red-400">Reset</button>
            </div>
        </form>
    </section>

    {{-- View Accounts --}}
    <section class="p-10 m-6 bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold">Account Management</h2>            
            <div class="space-x-2 grid grid-cols-1 md:grid-cols-3 text-center">
                <a href="#create-account" class="bg-gray-200 px-4 py-2 rounded hover:bg-green-300">Create Account</a>
                <a href="#view-accounts" class="bg-blue-300 px-4 py-2 rounded">View Accounts</a>
                <a href="#removed-accounts" class="bg-gray-200 px-4 py-2 rounded hover:bg-red-300">Removed Accounts</a>
            </div>
        </div>

       {{-- View Account Form --}}
        <div class="overflow-x-auto" id="view-accounts">
            <div class="flex items-center gap-3 mb-4">
                <input class="w-full px-3 py-4 border rounded bg-slate-50" type="text" name="search" placeholder="Search by name, username, or role..." id="search">
                <a href="#view-accounts" class="text-sm bg-gray-200 text-black px-4 py-2 rounded text-center hover:bg-purple-400">
                    <i class="fa-solid fa-rotate"></i>
                    Refresh
                </a>
            </div>
        
            <table class="min-w-full bg-white text-left border rounded">
                <thead class="bg-gray-200">
                    <tr class="">
                        <th class="py-2 px-4">Name</th>
                        <th class="py-2 px-4 text-center">Username</th>
                        <th class="py-2 px-4 text-center">Status</th>
                        <th class="py-2 px-4 text-center">Role</th>
                        <th class="py-2 px-4 text-center">Date</th>
                        <th class="py-2 px-4 text-center">Operations</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">John Doe</td>
                        <td class="py-2 px-4 border-b text-center">johndoe</td>
                        <td class="py-2 px-4 border-b text-center">Admin</td>
                        <td class="py-2 px-4 border-b text-center">Active</td>
                        <td class="py-2 px-4 border-b text-center">10-25-2025</td>
                        <td class="py-2 px-4 border-b text-center">
                            <a href="#" class="text-blue-600 hover:underline mx-1">Edit</a>
                            <a href="#" class="text-blue-600 hover:underline mx-1">Change Password</a>
                            <a href="#" class="text-red-600 hover:underline mx-1">Remove</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">Jane Smith</td>
                        <td class="py-2 px-4 border-b text-center">janesmith</td>
                        <td class="py-2 px-4 border-b text-center">HR</td>
                        <td class="py-2 px-4 border-b text-center">Active</td>
                        <td class="py-2 px-4 border-b text-center">10-25-2025</td>
                        <td class="py-2 px-4 border-b text-center">
                            <a href="#" class="text-blue-600 hover:underline mx-1">Edit</a>
                            <a href="#" class="text-blue-600 hover:underline mx-1">Change Password</a>
                            <a href="#" class="text-red-600 hover:underline mx-1">Remove</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b">Client XYZ</td>
                        <td class="py-2 px-4 border-b text-center">clientxyz</td>
                        <td class="py-2 px-4 border-b text-center">Client</td>
                        <td class="py-2 px-4 border-b text-center">Active</td>
                        <td class="py-2 px-4 border-b text-center">10-25-2025</td>
                        <td class="py-2 px-4 border-b text-center">
                            <a href="#" class="text-blue-600 hover:underline mx-1">Edit</a>
                            <a href="#" class="text-blue-600 hover:underline mx-1">Change Password</a>
                            <a href="#" class="text-red-600 hover:underline mx-1">Remove</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- Removed Accounts --}}
    <section class="p-10 m-6 bg-white rounded-lg shadow-md" id="removed-accounts">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold">Account Management</h2>            
            <div class="space-x-2 grid grid-cols-1 md:grid-cols-3 text-center">
                <a href="#create-account" class="bg-gray-200 px-4 py-2 rounded hover:bg-green-300">Create Account</a>
                <a href="#view-accounts" class="bg-gray-200 px-4 py-2 rounded hover:bg-blue-300">View Accounts</a>
                <a href="#removed-accounts" class="bg-red-300 px-4 py-2 rounded">Removed Accounts</a>
            </div>
        </div>

        {{-- Removed Account Form --}}
        <div class="overflow-x-auto" id="removed-accounts">
            <div class="flex items-center gap-3 mb-4">
                <input class="w-full px-3 py-2 border rounded bg-slate-50" type="text" name="search" placeholder="Search removed accounts..." id="search">
            </div>

            <table class="min-w-full bg-white text-left border rounded">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4">Login ID</th>
                        <th class="py-2 px-4">Name</th>
                        <th class="py-2 px-4 text-center">Username</th>
                        <th class="py-2 px-4 text-center">Role</th>
                        <th class="py-2 px-4 text-center">Date Removed</th>
                        <th class="py-2 px-4 text-center">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4">004</td>
                        <td class="py-2 px-4">Carlos Dickens</td>
                        <td class="py-2 px-4 text-center">carldick</td>
                        <td class="py-2 px-4 text-center">Head Security Guard</td>
                        <td class="py-2 px-4 text-center">2023-10-01</td>
                        <td class="py-2 px-4 text-center">
                            <a href="#" class="text-green-600 hover:underline mx-1">Restore</a>
                            <a href="#" class="text-red-600 hover:underline mx-1">Delete Permanently</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>

@endsection

