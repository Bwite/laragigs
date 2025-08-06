<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'Laravel,JavaScript',
            'company' => 'Acme Corp',
            'location' => 'Lusaka',
            'email' => 'email@gmail.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lead a Laravel-based development team and guide junior devs through projects using modern JavaScript practices.',
        ]);

        Listing::create([
            'title' => 'Full Stack Engineer',
            'tags' => 'Laravel,Backend,API',
            'company' => 'Acme Corp',
            'location' => 'Lusaka',
            'email' => 'email@gmail.com',
            'website' => 'https://www.acme.com',
            'description' => 'Act as the lead developer for all backend services, ensuring code quality and scalable architecture.',
        ]);

        Listing::create([
            'title' => 'Junior Web Developer',
            'tags' => 'HTML,CSS,JavaScript',
            'company' => 'CodeFlow Zambia',
            'location' => 'Ndola',
            'email' => 'jobs@codeflow.zm',
            'website' => 'https://codeflow.zm',
            'description' => 'Support the frontend team with design integration, UI improvements, and basic client-side logic.',
        ]);

        Listing::create([
            'title' => 'IT Systems Administrator',
            'tags' => 'Linux,Networking,Security',
            'company' => 'ZamHost Ltd.',
            'location' => 'Kitwe',
            'email' => 'admin@zamhost.co.zm',
            'website' => 'https://zamhost.co.zm',
            'description' => 'Maintain secure and efficient networks, ensure server uptime, and manage backup systems.',
        ]);

        Listing::create([
            'title' => 'Data Analyst',
            'tags' => 'Python,SQL,Power BI',
            'company' => 'Insight Analytics',
            'location' => 'Lusaka',
            'email' => 'careers@insightanalytics.com',
            'website' => 'https://insightanalytics.com',
            'description' => 'Interpret complex data sets, develop dashboards, and work with stakeholders to guide business decisions.',
        ]);

        Listing::create([
            'title' => 'UX/UI Designer',
            'tags' => 'Figma,Adobe XD,UX Research',
            'company' => 'Pixel Forge',
            'location' => 'Livingstone',
            'email' => 'jobs@pixelforge.zm',
            'website' => 'https://pixelforge.zm',
            'description' => 'Design user-friendly interfaces and conduct user testing to optimize experience across devices.',
        ]);

        Listing::create([
            'title' => 'DevOps Engineer',
            'tags' => 'Docker,Kubernetes,CI/CD',
            'company' => 'Cloud9 Tech',
            'location' => 'Lusaka',
            'email' => 'careers@cloud9.com',
            'website' => 'https://cloud9.com',
            'description' => 'Implement CI/CD pipelines, manage cloud infrastructure, and monitor deployments for stability.',
        ]);

        Listing::create([
            'title' => 'Mobile App Developer',
            'tags' => 'Flutter,Dart,Android,iOS',
            'company' => 'AppGenics',
            'location' => 'Ndola',
            'email' => 'dev@appgenics.co.zm',
            'website' => 'https://appgenics.co.zm',
            'description' => 'Develop and maintain cross-platform mobile apps with performance and usability in mind.',
        ]);

        Listing::create([
            'title' => 'Database Administrator',
            'tags' => 'MySQL,PostgreSQL,Backup',
            'company' => 'SecureData Ltd.',
            'location' => 'Chingola',
            'email' => 'hr@securedata.zm',
            'website' => 'https://securedata.zm',
            'description' => 'Manage and optimize databases, ensure backups, and monitor performance across platforms.',
        ]);

        Listing::create([
            'title' => 'Network Support Technician',
            'tags' => 'Cisco,Networking,Troubleshooting',
            'company' => 'Connect Zambia',
            'location' => 'Lusaka',
            'email' => 'support@connectzm.com',
            'website' => 'https://connectzm.com',
            'description' => 'Provide hands-on support for routers, switches, and corporate networks both on-site and remotely.',
        ]);
    }
}
