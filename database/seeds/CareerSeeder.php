<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('careers')->insert([
            ['jobtitle' => 'Human Resource Manager', 'major_id' => '14', 'r' => '0', 'i' => '0', 'a' => '0', 's' => '1', 'e' => '1', 'c' => '1', 'overview' => "Plan, direct, or coordinate human resources activities and staff of an organization.", 'jobdesc' => "a. Serve as a link between management and employees by handling questions, interpreting and administering contracts and helping resolve work-related problems.
            b. Advise managers on organizational policy matters, such as equal employment opportunity and sexual harassment, and recommend needed changes.
            c. Analyze and modify compensation and benefits policies to establish competitive programs and ensure compliance with legal requirements.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Talking to others", 'socialskill' => "1. Noticing a problem and figuring out the best way to solve it",  'peopleskill' => "1.   Thinking about the pros and consof different options and picking the best one
            2.   Measuring how well a system is working and how to improve it
            ", 'personality' => "People interested in this work like activities that include leading, making decisions, and business.

            They do well at jobs that need:
            a. Integrity
            b. Self Control
            c. Leadership
            d. Dependability
            e. Cooperation
            f. Initiative", 'img' => 'human resources manager.jpg'],

            ['jobtitle' => 'Human Resource Manager', 'major_id' => '16', 'r' => '0', 'i' => '0', 'a' => '0', 's' => '1', 'e' => '1', 'c' => '1', 'overview' => "Plan, direct, or coordinate human resources activities and staff of an organization.", 'jobdesc' => "a. Serve as a link between management and employees by handling questions, interpreting and administering contracts and helping resolve work-related problems.
            b. Advise managers on organizational policy matters, such as equal employment opportunity and sexual harassment, and recommend needed changes.
            c. Analyze and modify compensation and benefits policies to establish competitive programs and ensure compliance with legal requirements.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Talking to others", 'socialskill' => "1. Noticing a problem and figuring out the best way to solve it",  'peopleskill' => "1.   Thinking about the pros and consof different options and picking the best one
            2.   Measuring how well a system is working and how to improve it
            ", 'personality' => "People interested in this work like activities that include leading, making decisions, and business.

            They do well at jobs that need:
            a. Integrity
            b. Self Control
            c. Leadership
            d. Dependability
            e. Cooperation
            f. Initiative", 'img' => 'human resources manager.jpg'],


            ['jobtitle' => 'Human Resource Manager', 'major_id' => '20', 'r' => '0', 'i' => '0', 'a' => '0', 's' => '1', 'e' => '1', 'c' => '1', 'overview' => "Plan, direct, or coordinate human resources activities and staff of an organization.", 'jobdesc' => "a. Serve as a link between management and employees by handling questions, interpreting and administering contracts and helping resolve work-related problems.
            b. Advise managers on organizational policy matters, such as equal employment opportunity and sexual harassment, and recommend needed changes.
            c. Analyze and modify compensation and benefits policies to establish competitive programs and ensure compliance with legal requirements.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Talking to others", 'socialskill' => "1. Noticing a problem and figuring out the best way to solve it",  'peopleskill' => "1.   Thinking about the pros and consof different options and picking the best one
            2.   Measuring how well a system is working and how to improve it
            ", 'personality' => "People interested in this work like activities that include leading, making decisions, and business.

            They do well at jobs that need:
            a. Integrity
            b. Self Control
            c. Leadership
            d. Dependability
            e. Cooperation
            f. Initiative", 'img' => 'human resources manager.jpg'],

            ['jobtitle' => 'Psychologist', 'major_id' => '16', 'r' => '0', 'i' => '0', 'a' => '0', 's' => '1', 'e' => '1', 'c' => '1', 'overview' => "Assess, diagnose, and treat mental and emotional disorders of individuals through observation, interview, and psychological tests. Help individuals with distress or maladjustment understand their problems through their knowledge of case history, interviews with patients, and theory. Provide individual or group counseling services to assist individuals in achieving more effective personal, social, educational, and vocational development and adjustment. May design behavior modification programs and consult with medical personnel regarding the best treatment for patients.", 'jobdesc' => "a. Collect information about individuals or clients, using interviews, case histories, observational techniques, and other assessment methods.
            b. Counsel individuals, groups, or families to help them understand problems, deal with crisis situations, define goals, and develop realistic action plans.
            c. Document patient information including session notes, progress notes, recommendations, and treatment plans.
            ", 'basicskill' => "1.  Listening to others, not interrupting, and asking good questions
            2.  Talking to others", 'socialskill' => "1. Noticing a problem and figuring out the best way to solve it",  'peopleskill' => "1.   Understanding people's reactions
            2.   Looking for ways to help people
            ", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Concern for Others
            b. Integrity
            c. Dependability
            d. Self Control
            e. Stress Tolerance
            f. Social Orientation", 'img' => 'psychologist.jpg'],


            ['jobtitle' => 'Dentist', 'major_id' => '11', 'r' => '1', 'i' => '1', 'a' => '1', 's' => '0', 'e' => '0', 'c' => '0', 'overview' => "Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and other dental tissues affecting oral hygiene and retention of teeth. May fit dental appliances or provide preventive care.", 'jobdesc' => "a. Use masks, gloves, and safety glasses to protect patients and self from infectious diseases.
            b. Examine teeth, gums, and related tissues, using dental instruments, x-rays, or other diagnostic equipment, to evaluate dental health, diagnose diseases or abnormalities, and plan appropriate treatments.
            c. Administer anesthetics to limit the amount of pain experienced by patients during procedures.", 'basicskill' => "1.   Thinking about the pros and cons of different ways to solve a problem
            2.   Keeping track of how well people and/or groups are doing in order to make improvements", 'socialskill' => "1. Noticing a problem and figuring out the best way to solve it",  'peopleskill' => "1.   Looking for ways to help people
            2.   Understanding people's reactions", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Attention to Detail
            b. Integrity
            c. Dependability
            d. Concern for Others
            e. Self Control
            f. Stress Tolerance", 'img' => 'dentist.jpg'],



            ['jobtitle' => 'Doctor', 'major_id' => '10', 'r' => '0', 'i' => '1', 'a' => '0', 's' => '1', 'e' => '0', 'c' => '0', 'overview' => "Do you thrive in situations where you can interact with and help people? Are you interested in maintaining and restoring people's health through the practice of medicine? You may want to consider a career as a doctor!

            There is a specific type of doctor for almost every major system located in the human body. Regardless of specialty, doctors face the challenge of diagnosing and treating human disease, ailments, injuries, pain, or other conditions. This is done by listening to the patient, understanding the problem, and then using their scientific expertise to know how best to treat the ailment or concern.", 'jobdesc' => "a. Prescribe or administer treatment, therapy, medication, vaccination, and other specialized medical care to treat or prevent illness, disease, or injury in infants and children.
            b. Examine children regularly to assess their growth and development.
            c. Treat children who have minor illnesses, acute and chronic health problems, and growth and development concerns.
            ", 'basicskill' => "1.  Talking to others
            2.  Thinking about the pros and cons of different ways to solve a problem
            ", 'socialskill' => "1. Noticing a problem and figuring out the best way to solve it",  'peopleskill' => "1.  Understanding people's reactions
            2.  Looking for ways to help people
            ", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Concern for Others
            b. Integrity
            c. Self Control
            d. Dependability
            e. Attention to Detail
            f. Persistence", 'img' => 'doctor.jpg'],
        

            ['jobtitle' => 'Counselor', 'major_id' => '16', 'r' => '0', 'i' => '0', 'a' => '0', 's' => '1', 'e' => '0', 'c' => '0', 'overview' => "Counsel and advise individuals and groups to promote optimum mental and emotional health, with an emphasis on prevention. May help individuals deal with a broad range of mental health issues, such as those associated with addictions and substance abuse; family, parenting, and marital problems; stress management; self-esteem; or aging.", 'jobdesc' => "a. Maintain confidentiality of records relating to clients' treatment.
            b. Encourage clients to express their feelings and discuss what is happening in their lives, helping them to develop insight into themselves or their relationships.
            c. Collect information about clients through interviews, observation, or tests.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Talking to others", 'socialskill' => "1. Understanding people's reactions
            2. Looking for ways to help people",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Measuring how well a system is working and how to improve it
            3.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include helping people, teaching, and talking.

            They do well at jobs that need:
            a. Self Control
            b. Concern for Others
            c. Integrity
            d.Stress Tolerance
            e. Dependability
            f. Cooperation", 'img' => 'counselor.jpg'],

            ['jobtitle' => 'Lawyer', 'major_id' => '7', 'r' => '0', 'i' => '1', 'a' => '0', 's' => '1', 'e' => '1', 'c' => '0', 'overview' => "Represent clients in criminal and civil litigation and other legal proceedings, draw up legal documents, or manage or advise clients on legal transactions. May specialize in a single area or may practice broadly in many areas of law.", 'jobdesc' => "a. Analyze the probable outcomes of cases, using knowledge of legal precedents.
            b. Advise clients concerning business transactions, claim liability, advisability of prosecuting or defending lawsuits, or legal rights and obligations.
            c. Select jurors, argue motions, meet with judges, and question witnesses during the course of a trial.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Talking to others", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Measuring how well a system is working and how to improve it
            3.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include leading, making decisions, and business.

            They do well at jobs that need:
            a. Analytical Thinking
            b. Dependability
            c. Integrity
            d. Attention to Detail
            e. Stress Tolerance
            f. Initiative", 'img' => 'lawyer.jpg'],


            ['jobtitle' => 'Nurse', 'major_id' => '12', 'r' => '1', 'i' => '0', 'a' => '0', 's' => '1', 'e' => '0', 'c' => '1', 'overview' => "Assess patient health problems and needs, develop and implement nursing care plans, and maintain medical records. Administer nursing care to ill, injured, convalescent, or disabled patients. May advise patients on health maintenance and disease prevention or provide case management. Licensing or registration required.", 'jobdesc' => "a. Maintain accurate, detailed reports and records.
            b. Administer medications to patients and monitor patients for reactions or side effects.
            c. Record patients' medical information and vital signs.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Talking to others", 'socialskill' => "1. Understanding people's reactions
            2. Looking for ways to help people",  'peopleskill' => "1. Noticing a problem and figuring out the best way to solve it", 'personality' => "People interested in this work like activities that include helping people, teaching, and talking.

            They do well at jobs that need:
            a. Attention to Detail
            b. Integrity
            c. Cooperation
            d. Concern for Others
            e. Dependability
            f. Stress Tolerance", 'img' => 'nurse.jpg'],


            ['jobtitle' => 'Veterinarian', 'major_id' => '28', 'r' => '1', 'i' => '0', 'a' => '0', 's' => '1', 'e' => '0', 'c' => '0', 'overview' => "Diagnose, treat, or research diseases and injuries of animals. Includes veterinarians who conduct research and development, inspect livestock, or care for pets and companion animals.", 'jobdesc' => "a. Treat sick or injured animals by prescribing medication, setting bones, dressing wounds, or performing surgery.
            b. Inoculate animals against various diseases, such as rabies or distemper.
            c. Examine animals to detect and determine the nature of diseases or injuries.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Measuring how well a system is working and how to improve it", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Integrity
            b. Attention to Detail
            c. Analytical Thinking
            d. Stress Tolerance
            e. Dependability
            f. Cooperation", 'img' => 'veterinarian.jpg'],

            ['jobtitle' => 'Customer Service', 'major_id' => '9', 'r' => '0', 'i' => '0', 'a' => '0', 's' => '1', 'e' => '1', 'c' => '0', 'overview' => "Interact with customers to provide basic or scripted information in response to routine inquiries about products and services. May handle and resolve general complaints. Excludes individuals whose duties are primarily installation, sales, repair, and technical support.", 'jobdesc' => "a. Confer with customers by telephone or in person to provide information about products or services, take or enter orders, cancel accounts, or obtain details of complaints.
            b. Check to ensure that appropriate changes were made to resolve customers' problems.
            c. Keep records of customer interactions or transactions, recording details of inquiries, complaints, or comments, as well as actions taken.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Talking to others", 'socialskill' => "1. Looking for ways to help people
            2. Talking people into changing their minds or their behavior",  'peopleskill' => "", 'personality' => "People interested in this work like activities that include leading, making decisions, and business.

            They do well at jobs that need:
            a. Attention to Detail
            b. Cooperation
            c. Integrity
            d. Dependability
            e. Concern for Others
            f. Self Control", 'img' => 'customer service.jpg'],

            ['jobtitle' => 'Customer Service', 'major_id' => '14', 'r' => '0', 'i' => '0', 'a' => '0', 's' => '1', 'e' => '1', 'c' => '0', 'overview' => "Interact with customers to provide basic or scripted information in response to routine inquiries about products and services. May handle and resolve general complaints. Excludes individuals whose duties are primarily installation, sales, repair, and technical support.", 'jobdesc' => "a. Confer with customers by telephone or in person to provide information about products or services, take or enter orders, cancel accounts, or obtain details of complaints.
            b. Check to ensure that appropriate changes were made to resolve customers' problems.
            c. Keep records of customer interactions or transactions, recording details of inquiries, complaints, or comments, as well as actions taken.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Talking to others", 'socialskill' => "1. Looking for ways to help people
            2. Talking people into changing their minds or their behavior",  'peopleskill' => "", 'personality' => "People interested in this work like activities that include leading, making decisions, and business.

            They do well at jobs that need:
            a. Attention to Detail
            b. Cooperation
            c. Integrity
            d. Dependability
            e. Concern for Others
            f. Self Control", 'img' => 'customer service.jpg'],

            ['jobtitle' => 'Pharmacist', 'major_id' => '3', 'r' => '0', 'i' => '0', 'a' => '0', 's' => '1', 'e' => '0', 'c' => '1', 'overview' => "Dispense drugs prescribed by physicians and other health practitioners and provide information to patients about medications and their use. May advise physicians and other health practitioners on the selection, dosage, interactions, and side effects of medications.", 'jobdesc' => "a. Review prescriptions to assure accuracy, to ascertain the needed ingredients, and to evaluate their suitability.
            b. Provide information and advice regarding drug interactions, side effects, dosage, and proper medication storage.
            c. Maintain records, such as pharmacy files, patient profiles, charge system files, inventories, control records for radioactive nuclei, or registries of poisons, narcotics, or controlled drugs.", 'basicskill' => "1. Reading work related information
            2. Listening to others, not interrupting, and asking good questions", 'socialskill' => "1. Reading work related information
            2. Listening to others, not interrupting, and asking good questions",  'peopleskill' => "", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Attention to Detail
            b. Dependability
            c. Integrity
            d. Stress Tolerance
            e. Concern for Others
            f. Self Control", 'img' => 'pharmacist.jpg'],

            ['jobtitle' => 'Architect', 'major_id' => '27', 'r' => '1', 'i' => '0', 'a' => '1', 's' => '0', 'e' => '1', 'c' => '0', 'overview' => "Plan and design structures, such as private residences, office buildings, theaters, factories, and other structural property.", 'jobdesc' => "a. Prepare scale drawings or architectural designs, using computer-aided design or other tools.
            b. Plan or design structures such as residences, office buildings, theatres, factories, or other structural properties in accordance with environmental, safety, or other regulations.
            c. Direct activities of technicians engaged in preparing drawings or specification documents.", 'basicskill' => "1. Talking to others
            2. Thinking about the pros and cons of different ways to solve a problem", 'socialskill' => "1. Noticing a problem and figuring out the best way to solve it",  'peopleskill' => "1. Thinking about the pros and cons of different options and picking the best one
            2. Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include creating, designing, and making your own rules.

            They do well at jobs that need:
            a. Attention to Detail
            b. Dependability
            c. Analytical Thinking
            d. Initiative
            e. Integrity
            f. Cooperation", 'img' => 'architect.jpg'],


            ['jobtitle' => 'Computer Engineer ', 'major_id' => '29', 'r' => '1', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '1', 'overview' => "Create, modify, and test the code and scripts that allow computer applications to run. Work from specifications drawn up by software and web developers or other individuals. May develop and write computer programs to store, locate, and retrieve specific documents, data, and information.", 'jobdesc' => "a. Write, analyze, review, and rewrite programs, using workflow chart and diagram, and applying knowledge of computer capabilities, subject matter, and symbolic logic.
            b.Correct errors by making appropriate changes and rechecking the program to ensure that the desired results are produced.
            c. Perform or direct revision, repair, or expansion of existing programs to increase operating efficiency or adapt to new requirements.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Thinking about the pros and cons of different ways to solve a problem", 'socialskill' => "",  'peopleskill' => "1.  Figuring out how a system should work and how changes in the future will affect it
            2.  Thinking about the pros and cons of different options and picking the best one", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Attention to Detail
            b. Analytical Thinking
            c. Integrity
            d. Cooperation
            e. Independence
            f. Achievement/Effort", 'img' => 'computer engineer.jpg'],


            ['jobtitle' => 'Computer Engineer ', 'major_id' => '19', 'r' => '1', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '1', 'overview' => "Create, modify, and test the code and scripts that allow computer applications to run. Work from specifications drawn up by software and web developers or other individuals. May develop and write computer programs to store, locate, and retrieve specific documents, data, and information.", 'jobdesc' => "a. Write, analyze, review, and rewrite programs, using workflow chart and diagram, and applying knowledge of computer capabilities, subject matter, and symbolic logic.
            b.Correct errors by making appropriate changes and rechecking the program to ensure that the desired results are produced.
            c. Perform or direct revision, repair, or expansion of existing programs to increase operating efficiency or adapt to new requirements.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Thinking about the pros and cons of different ways to solve a problem", 'socialskill' => "",  'peopleskill' => "1.  Figuring out how a system should work and how changes in the future will affect it
            2.  Thinking about the pros and cons of different options and picking the best one", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Attention to Detail
            b. Analytical Thinking
            c. Integrity
            d. Cooperation
            e. Independence
            f. Achievement/Effort", 'img' => 'computer engineer.jpg'],



            ['jobtitle' => 'Web Developer', 'major_id' => '29', 'r' => '1', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '1', 'overview' => "Develop and implement websites, web applications, application databases, and interactive web interfaces. Evaluate code to ensure that it is properly structured, meets industry standards, and is compatible with browsers and devices. Optimize website performance, scalability, and server-side code and processes. May develop website infrastructure and integrate websites with other computer applications.", 'jobdesc' => "a. Write supporting code for Web applications or Web sites.
            b. Design, build, or maintain Web sites, using authoring or scripting languages, content creation tools, management tools, and digital media.
            c. Back up files from Web sites to local directories for instant recovery in case of problems.", 'basicskill' => "1. Thinking about the pros and cons of different ways to solve a problem
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include data, detail, and regular routines.

            They do well at jobs that need:
            a. Attention to Detail
            b. Analytical Thinking
            c. Persistence
            d. Dependability
            e. Adaptability/Flexibility
            f. Initiative", 'img' => 'web developer.jpg'],

            
            ['jobtitle' => 'Agriculture', 'major_id' => '30', 'r' => '1', 'i' => '0', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '0', 'overview' => "Apply knowledge of engineering technology and biological science to agricultural problems concerned with power and machinery, electrification, structures, soil and water conservation, and processing of agricultural products.", 'jobdesc' => "a. Prepare reports, sketches, working drawings, specifications, proposals, and budgets for proposed sites or systems.
            b. Discuss plans with clients, contractors, consultants, and other engineers so that they can be evaluated and necessary changes made.
            c. Meet with clients, such as district or regional councils, farmers, and developers, to discuss their needs.", 'basicskill' => "1. Thinking about the pros and cons of different ways to solve a problem
            2. Listening to others, not interrupting, and asking good questions", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Attention to Detail
            b. Analytical Thinking
            c. Integrity
            d. Dependability
            e. Initiative
            f. Cooperation", 'img' => 'agriculture.jpg'],



            ['jobtitle' => 'Public Relations', 'major_id' => '9', 'r' => '0', 'i' => '0', 'a' => '1', 's' => '0', 'e' => '0', 'c' => '0', 'overview' => "Promote or create an intended public image for individuals, groups, or organizations. May write or select material for release to various communications media. May specialize in using social media.", 'jobdesc' => "a. Respond to requests for information from the media or designate an appropriate spokesperson or information source.
            b. Write press releases or other media communications to promote clients.
            c. Establish or maintain cooperative relationships with representatives of community, consumer, employee, or public interest groups.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Talking to others", 'socialskill' => "1. Changing what is done based on other people's actions
            2. Understanding people's reactions",  'peopleskill' => "", 'personality' => "People interested in this work like activities that include leading, making decisions, and business.

            They do well at jobs that need:
            a. Integrity
            b. Attention to Detail
            c. Dependability
            d. Persistence
            e. Cooperation
            f. Stress Tolerance", 'img' => 'public relation.jpg'],


            ['jobtitle' => 'Technical Writer', 'major_id' => '9', 'r' => '0', 'i' => '0', 'a' => '1', 's' => '0', 'e' => '0', 'c' => '0', 'overview' => "Write technical materials, such as equipment manuals, appendices, or operating and maintenance instructions. May assist in layout work.", 'jobdesc' => "a. Organize material and complete writing assignment according to set standards regarding order, clarity, conciseness, style, and terminology.
            b. Maintain records and files of work and revisions.
            c.Edit, standardize, or make changes to material prepared by other writers or establishment personnel.", 'basicskill' => "1. Writing things for co-workers or customers
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "", 'personality' => "People interested in this work like activities that include creating, designing, and making your own rules.

            They do well at jobs that need:
            a. Attention to Detail
            b. Dependability
            c. Integrity
            d. Cooperation
            e. Independence
            f. Initiative", 'img' => 'technical writer.jpg'],


            ['jobtitle' => 'Technical Writer', 'major_id' => '17', 'r' => '0', 'i' => '0', 'a' => '1', 's' => '0', 'e' => '0', 'c' => '0', 'overview' => "Write technical materials, such as equipment manuals, appendices, or operating and maintenance instructions. May assist in layout work.", 'jobdesc' => "a. Organize material and complete writing assignment according to set standards regarding order, clarity, conciseness, style, and terminology.
            b. Maintain records and files of work and revisions.
            c.Edit, standardize, or make changes to material prepared by other writers or establishment personnel.", 'basicskill' => "1. Writing things for co-workers or customers
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "", 'personality' => "People interested in this work like activities that include creating, designing, and making your own rules.

            They do well at jobs that need:
            a. Attention to Detail
            b. Dependability
            c. Integrity
            d. Cooperation
            e. Independence
            f. Initiative", 'img' => 'technical writer.jpg'],


            ['jobtitle' => 'Actuary', 'major_id' => '15', 'r' => '0', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '0', 'overview' => "Analyze statistical data, such as mortality, accident, sickness, disability, and retirement rates and construct probability tables to forecast risk and liability for payment of future benefits. May ascertain insurance rates required and cash reserves necessary to ensure payment of future benefits.", 'jobdesc' => "a. Ascertain premium rates required and cash reserves and liabilities necessary to ensure payment of future benefits.
            b. Design, review, and help administer insurance, annuity and pension plans, determining financial soundness and calculating premiums.
            c. Determine, or help determine, company policy, and explain complex technical matters to company executives, government officials, shareholders, policyholders, or the public.", 'basicskill' => "1. Thinking about the pros and cons of different ways to solve a problem
            2. Using math to solve problems", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Measuring how well a system is working and how to improve it", 'personality' => "People interested in this work like activities that include data, detail, and regular routines.

            They do well at jobs that need:
            a. Analytical Thinking
            b. Attention to Detail
            c. Integrity
            d. Achievement/Effort
            e. Dependability
            f. Persistence", 'img' => 'actuary.jpg'],


            ['jobtitle' => 'Accountant', 'major_id' => '1', 'r' => '0', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '1', 'c' => '1', 'overview' => "Examine, analyze, and interpret accounting records to prepare financial statements, give advice, or audit and evaluate statements prepared by others. Install or advise on systems of recording costs or other financial and budgetary data.", 'jobdesc' => "a. Prepare detailed reports on audit findings.
            b. Report to management about asset utilization and audit results, and recommend changes in operations and financial activities.
            c. Collect and analyze data to detect deficient controls, duplicated effort, extravagance, fraud, or non-compliance with laws, regulations, and management policies.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include data, detail, and regular routines.

            They do well at jobs that need:
            a. Attention to Detail
            b. Integrity
            c. Dependability
            d. Analytical Thinking
            e. Cooperation
            f. Stress Tolerance", 'img' => 'accountant.jpg'],


            ['jobtitle' => 'Chemist', 'major_id' => '13', 'r' => '0', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '1', 'overview' => "Conduct qualitative and quantitative chemical analyses or experiments in laboratories for quality or process control or to develop new products or knowledge.", 'jobdesc' => "a. Analyze organic or inorganic compounds to determine chemical or physical properties, composition, structure, relationships, or reactions, using chromatography, spectroscopy, or spectrophotometry techniques.
            b. Conduct quality control tests.
            c. Maintain laboratory instruments to ensure proper working order and troubleshoot malfunctions when needed.", 'basicskill' => "1. Using scientific rules and strategies to solve problems
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "1.  Measuring how well a system is working and how to improve it
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Attention to Detail
            b. Analytical Thinking
            c. Integrity
            d. Dependability
            e. Adaptability/Flexibility
            f. Cooperation", 'img' => 'chemist.jpg'],


            ['jobtitle' => 'Chemist', 'major_id' => '24', 'r' => '0', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '0', 'overview' => "Conduct qualitative and quantitative chemical analyses or experiments in laboratories for quality or process control or to develop new products or knowledge.", 'jobdesc' => "a. Analyze organic or inorganic compounds to determine chemical or physical properties, composition, structure, relationships, or reactions, using chromatography, spectroscopy, or spectrophotometry techniques.
            b. Conduct quality control tests.
            c. Maintain laboratory instruments to ensure proper working order and troubleshoot malfunctions when needed.", 'basicskill' => "1. Using scientific rules and strategies to solve problems
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "1.  Measuring how well a system is working and how to improve it
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Attention to Detail
            b. Analytical Thinking
            c. Integrity
            d. Dependability
            e. Adaptability/Flexibility
            f. Cooperation", 'img' => 'chemist.jpg'],


            ['jobtitle' => 'Nutritionist', 'major_id' => '5', 'r' => '0', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '0', 'overview' => "Plan and conduct food service or nutritional programs to assist in the promotion of health and control of disease. May supervise activities of a department providing quantity food services, counsel individuals, or conduct nutritional research.", 'jobdesc' => "a. Monitor food service operations to ensure conformance to nutritional, safety, sanitation and quality standards.
            b. Assess nutritional needs, diet restrictions and current health plans to develop and implement dietary-care plans and provide nutritional counseling.
            c. Advise patients and their families on nutritional principles, dietary plans, diet modifications, and food selection and preparation.", 'basicskill' => "1. Reading work related information
            2. Keeping track of how well people and/or groups are doing in order to make improvements", 'socialskill' => "1. Changing what is done based on other people's actions
            2. Teaching people how to do something",  'peopleskill' => "", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Concern for Others
            b. Dependability
            c. Integrity
            d. Attention to Detail
            e. Cooperation
            f. Self Control", 'img' => 'nutritionist.jpg'],


            ['jobtitle' => 'Nutritionist', 'major_id' => '31', 'r' => '0', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '0', 'overview' => "Plan and conduct food service or nutritional programs to assist in the promotion of health and control of disease. May supervise activities of a department providing quantity food services, counsel individuals, or conduct nutritional research.", 'jobdesc' => "a. Monitor food service operations to ensure conformance to nutritional, safety, sanitation and quality standards.
            b. Assess nutritional needs, diet restrictions and current health plans to develop and implement dietary-care plans and provide nutritional counseling.
            c. Advise patients and their families on nutritional principles, dietary plans, diet modifications, and food selection and preparation.", 'basicskill' => "1. Reading work related information
            2. Keeping track of how well people and/or groups are doing in order to make improvements", 'socialskill' => "1. Changing what is done based on other people's actions
            2. Teaching people how to do something",  'peopleskill' => "", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Concern for Others
            b. Dependability
            c. Integrity
            d. Attention to Detail
            e. Cooperation
            f. Self Control", 'img' => 'nutritionist.jpg'],


            ['jobtitle' => 'Financial Analyst', 'major_id' => '8', 'r' => '0', 'i' => '0', 'a' => '0', 's' => '0', 'e' => '1', 'c' => '0', 'overview' => "Develop quantitative techniques to inform securities investing, equities investing, pricing, or valuation of financial instruments. Develop mathematical or statistical models for risk management, asset optimization, pricing, or relative value analysis.", 'jobdesc' => "a. Develop core analytical capabilities or model libraries, using advanced statistical, quantitative, or econometric techniques.
            b. Provide application or analytical support to researchers or traders on issues such as valuations or data.
            c. Research or develop analytical tools to address issues such as portfolio construction or optimization, performance measurement, attribution, profit and loss measurement, or pricing models.", 'basicskill' => "1. Using math to solve problems
            2. Thinking about the pros and cons of different ways to solve a problem", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Analytical Thinking
            b. Attention to Detail
            c. Achievement/Effort
            d. Dependability
            e. Persistence
            f. Integrity", 'img' => 'financial analyst.jpg'],


            ['jobtitle' => 'Statistician', 'major_id' => '21', 'r' => '0', 'i' => '0', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '1', 'overview' => "Develop or apply mathematical or statistical theory and methods to collect, organize, interpret, and summarize numerical data to provide usable information. May specialize in fields such as biostatistics, agricultural statistics, business statistics, or economic statistics. Includes mathematical and survey statisticians", 'jobdesc' => "a. Analyze and interpret statistical data to identify significant differences in relationships among sources of information.
            b. Identify relationships and trends in data, as well as any factors that could affect the results of research.
            c. Determine whether statistical methods are appropriate, based on user needs or research questions of interest.", 'basicskill' => "1. Using math to solve problems
            2. Thinking about the pros and cons of different ways to solve a problem", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include data, detail, and regular routines.

            They do well at jobs that need:
            a. Analytical Thinking
            b. Attention to Detail
            c. Integrity
            d. Dependability
            e. Achievement/Effort
            f. Persistence", 'img' => 'statistician.jpg'],


            ['jobtitle' => 'Financial Planner', 'major_id' => '8', 'r' => '0', 'i' => '0', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '1', 'overview' => "Advise clients on financial plans using knowledge of tax and investment strategies, securities, insurance, pension plans, and real estate. Duties include assessing clients' assets, liabilities, cash flow, insurance coverage, tax status, and financial objectives. May also buy and sell financial assets for clients.", 'jobdesc' => "a. Interview clients to determine their current income, expenses, insurance coverage, tax status, financial objectives, risk tolerance, or other information needed to develop a financial plan.
            b. Recommend to clients strategies in cash management, insurance coverage, investment planning, or other areas to help them achieve their financial goals.
            c. Manage client portfolios, keeping client plans up-to-date.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include leading, making decisions, and business.

            They do well at jobs that need:
            a. Integrity
            b. Dependability
            c. Attention to Detail
            d. Analytical Thinking
            e. Concern for Others
            f. Achievement/Effort", 'img' => 'financial planner.jpg'],



            //sampe 31

            ['jobtitle' => 'Food Scientist', 'major_id' => '2', 'r' => '1', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '0', 'overview' => "Use chemistry, microbiology, engineering, and other sciences to study the principles underlying the processing and deterioration of foods; analyze food content to determine levels of vitamins, fat, sugar, and protein; discover new food sources; research ways to make processed foods safe, palatable, and healthful; and apply food science knowledge to determine best ways to process, package, preserve, store, and distribute food", 'jobdesc' => "a. Inspect food processing areas to ensure compliance with government regulations and standards for sanitation, safety, quality, and waste management.
            b. Check raw ingredients for maturity or stability for processing, and finished products for safety, quality, and nutritional value.
            c. Develop new or improved ways of preserving, processing, packaging, storing, and delivering foods, using knowledge of chemistry, microbiology, and other sciences.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Analytical Thinking
            b. Integrity
            c. Attention to Detail
            d. Cooperation
            e. Achievement/Effort
            f. Dependability", 'img' => 'food scientist.jpg'],



            ['jobtitle' => 'Biologist', 'major_id' => '2', 'r' => '0', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '0', 'overview' => "Research or study basic principles of plant and animal life, such as origin, relationship, development, anatomy, and functions.", 'jobdesc' => "a. Prepare technical and research reports, such as environmental impact reports, and communicate the results to individuals in industry, government, or the general public.
            b. Develop and maintain liaisons and effective working relations with groups and individuals, agencies, and the public to encourage cooperative management strategies or to develop information and interpret findings.
            c. Collect and analyze biological data about relationships among and between organisms and their environment.", 'basicskill' => "1. Using scientific rules and strategies to solve problems
            2. Listening to others, not interrupting, and asking good questions", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Attention to Detail
            b. Cooperation
            c. Integrity
            d. Analytical Thinking
            e. Initiative
            f. Dependability", 'img' => 'biologist.jpg'],


            ['jobtitle' => 'Enviromental Scientist', 'major_id' => '2', 'r' => '1', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '1', 'overview' => "Research, design, plan, or perform engineering duties in the prevention, control, and remediation of environmental hazards using various engineering disciplines. Work may include waste treatment, site remediation, or pollution control technology.", 'jobdesc' => "a. Provide technical support for environmental remediation or litigation projects, including remediation system design or determination of regulatory applicability.
            b. Collaborate with environmental scientists, planners, hazardous waste technicians, engineers, experts in law or business, or other specialists to address environmental problems.
            c. Assess the existing or potential environmental impact of land use projects on air, water, or land.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Integrity
            b. Attention to Detail
            c. Analytical Thinking
            d. Cooperation
            e. Dependability
            f. Achievement/Effort", 'img' => 'biologist.jpg'],


            ['jobtitle' => 'Biophysicist', 'major_id' => '4', 'r' => '1', 'i' => '1', 'a' => '0', 's' => '1', 'e' => '0', 'c' => '0', 'overview' => "Study the chemical composition or physical principles of living cells and organisms, their electrical and mechanical energy, and related phenomena. May conduct research to further understanding of the complex chemical combinations and reactions involved in metabolism, reproduction, growth, and heredity. May determine the effects of foods, drugs, serums, hormones, and other substances on tissues and vital processes of living organisms.", 'jobdesc' => "a. Share research findings by writing scientific articles or by making presentations at scientific conferences.
            b. Teach or advise undergraduate or graduate students or supervise their research.
            c. Study physical principles of living cells or organisms and their electrical or mechanical energy, applying methods and knowledge of mathematics, physics, chemistry, or biology.", 'basicskill' => "1. Using scientific rules and strategies to solve problems
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Integrity
            b. Analytical Thinking
            c. Persistence
            d. Attention to Detail
            e. Achievement/Effort
            f. Dependability", 'img' => 'biophysicist.jpg'],



            ['jobtitle' => 'Physicists', 'major_id' => '4', 'r' => '1', 'i' => '1', 'a' => '0', 's' => '1', 'e' => '0', 'c' => '0', 'overview' => "Conduct research into physical phenomena, develop theories on the basis of observation and experiments, and devise methods to apply physical laws and theories.", 'jobdesc' => "a. Perform complex calculations as part of the analysis and evaluation of data, using computers.
            b. Analyze data from research conducted to detect and measure physical phenomena.
            c. Describe and express observations and conclusions in mathematical terms.", 'basicskill' => "1. Using scientific rules and strategies to solve problems
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Innovation
            b. Achievement/Effort
            c. Analytical Thinking
            d. Initiative
            e. Attention to Detail
            f. Integrity", 'img' => 'physicist.jpg'],



            ['jobtitle' => 'Laboratory Technician', 'major_id' => '4', 'r' => '1', 'i' => '1', 'a' => '0', 's' => '1', 'e' => '0', 'c' => '0', 'overview' => "Perform routine medical laboratory tests for the diagnosis, treatment, and prevention of disease. May work under the supervision of a medical technologist.", 'jobdesc' => "a. Conduct chemical analyses of body fluids, such as blood or urine, using microscope or automatic analyzer to detect abnormalities or diseases and enter findings into computer.
            b. Analyze the results of tests or experiments to ensure conformity to specifications, using special mechanical or electrical devices.
            c. Set up, maintain, calibrate, clean, and test sterility of medical laboratory equipment", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "", 'personality' => "People interested in this work like activities that include practical, hands-on problems and solutions.

            They do well at jobs that need:
            a. Attention to Detail
            b. Dependability
            c. Integrity
            d. Independence
            e. Analytical Thinking
            f. Cooperation", 'img' => 'laboratory technician.jpg'],


            ['jobtitle' => 'Politician', 'major_id' => '6', 'r' => '0', 'i' => '1', 'a' => '0', 's' => '1', 'e' => '1', 'c' => '0', 'overview' => "Study the origin, development, and operation of political systems. May study topics, such as public opinion, political decisionmaking, and ideology. May analyze the structure and operation of governments, as well as various political entities. May conduct public opinion surveys, analyze election results, or analyze public documents.", 'jobdesc' => "a. Disseminate research results through academic publications, written reports, or public presentations.
            b. Teach political science.
            c. Develop and test theories, using information from interviews, newspapers, periodicals, case law, historical papers, polls, or statistical sources.", 'basicskill' => "1. Reading work related information
            2. Talking to others", 'socialskill' => "",  'peopleskill' => "1.  Thinking about the pros and cons of different options and picking the best one
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Analytical Thinking
            b. Achievement/Effort
            c. Independence
            d. Integrity
            e. Initiative
            f. Persistence", 'img' => 'politician.jpg'],


            ['jobtitle' => 'Journalist', 'major_id' => '6', 'r' => '0', 'i' => '1', 'a' => '1', 's' => '1', 'e' => '0', 'c' => '0', 'overview' => "Narrate or write news stories, reviews, or commentary for print, broadcast, or other communications media such as newspapers, magazines, radio, or television. May collect and analyze information through interview, investigation, or observation.", 'jobdesc' => "a. Write commentaries, columns, or scripts, using computers.
            b. Coordinate and serve as an anchor on news broadcast programs.
            c. Examine news items of local, national, and international significance to determine topics to address, or obtain assignments from editorial staff members.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Reading work related information", 'socialskill' => "1. Understanding people's reactions
            2. Changing what is done based on other people's actions",  'peopleskill' => "", 'personality' => "People interested in this work like activities that include creating, designing, and making your own rules.

            They do well at jobs that need:
            a. Dependability
            b. Attention to Detail
            c. Integrity
            d. Initiative
            e. Stress Tolerance
            f. Achievement/Effort", 'img' => 'journalist.jpg'],


            ['jobtitle' => 'Journalist', 'major_id' => '20', 'r' => '0', 'i' => '1', 'a' => '1', 's' => '1', 'e' => '0', 'c' => '0', 'overview' => "Narrate or write news stories, reviews, or commentary for print, broadcast, or other communications media such as newspapers, magazines, radio, or television. May collect and analyze information through interview, investigation, or observation.", 'jobdesc' => "a. Write commentaries, columns, or scripts, using computers.
            b. Coordinate and serve as an anchor on news broadcast programs.
            c. Examine news items of local, national, and international significance to determine topics to address, or obtain assignments from editorial staff members.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Reading work related information", 'socialskill' => "1. Understanding people's reactions
            2. Changing what is done based on other people's actions",  'peopleskill' => "", 'personality' => "People interested in this work like activities that include creating, designing, and making your own rules.

            They do well at jobs that need:
            a. Dependability
            b. Attention to Detail
            c. Integrity
            d. Initiative
            e. Stress Tolerance
            f. Achievement/Effort", 'img' => 'journalist.jpg'],



            ['jobtitle' => 'Intrepreter', 'major_id' => '18', 'r' => '0', 'i' => '1', 'a' => '1', 's' => '1', 'e' => '0', 'c' => '0', 'overview' => "Interpret oral or sign language, or translate written text from one language into another.", 'jobdesc' => "Interpret oral or sign language, or translate written text from one language into another.", 'basicskill' => "a. Follow ethical codes that protect the confidentiality of information.
            b. Translate messages simultaneously or consecutively into specified languages, orally or by using hand signs, maintaining message content, context, and style as much as possible.
            c. Listen to speakers' statements to determine meanings and to prepare translations, using electronic listening systems as necessary.", 'socialskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Talking to others",  'peopleskill' => "", 'personality' => "People interested in this work like activities that include creating, designing, and making your own rules.

            They do well at jobs that need:
            a. Integrity
            b. Dependability
            c. Attention to Detail
            d. Self Control
            e. Stress Tolerance
            f. Adaptability/Flexibility", 'img' => 'interpreter.jpg'],


            ['jobtitle' => 'Software Engineer', 'major_id' => '29', 'r' => '0', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '0', 'overview' => "Research, design, and develop computer and network software or specialized utility programs. Analyze user needs and develop software solutions, applying principles and techniques of computer science, engineering, and mathematical analysis. Update software or enhance existing software capabilities. May work with computer hardware engineers to integrate hardware and software systems, and develop specifications and performance requirements. May maintain databases within an application area, working individually or coordinating database development as part of a team. ", 'jobdesc' => "a. Analyze information to determine, recommend, and plan installation of a new system or modification of an existing system.
            b. Analyze user needs and software requirements to determine feasibility of design within time and cost constraints.
            c. Confer with data processing or project managers to obtain information on limitations or capabilities for data processing projects.
            ", 'basicskill' => "1. Thinking about the pros and cons of different ways to solve a problem
            2. Reading work related information", 'socialskill' => "1. Noticing a problem and figuring out the best way to solve it",  'peopleskill' => "1.    Figuring out how a system should work and how changes in the future will affect it
            2.   Thinking about the pros and cons of different options and picking the best one", 'personality' => "", 'img' => 'software engineer.jpg'],


            ['jobtitle' => 'Software Engineer', 'major_id' => '22', 'r' => '0', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '0', 'overview' => "Research, design, and develop computer and network software or specialized utility programs. Analyze user needs and develop software solutions, applying principles and techniques of computer science, engineering, and mathematical analysis. Update software or enhance existing software capabilities. May work with computer hardware engineers to integrate hardware and software systems, and develop specifications and performance requirements. May maintain databases within an application area, working individually or coordinating database development as part of a team. ", 'jobdesc' => "a. Analyze information to determine, recommend, and plan installation of a new system or modification of an existing system.
            b. Analyze user needs and software requirements to determine feasibility of design within time and cost constraints.
            c. Confer with data processing or project managers to obtain information on limitations or capabilities for data processing projects.
            ", 'basicskill' => "1. Thinking about the pros and cons of different ways to solve a problem
            2. Reading work related information", 'socialskill' => "1. Noticing a problem and figuring out the best way to solve it",  'peopleskill' => "1.    Figuring out how a system should work and how changes in the future will affect it
            2.   Thinking about the pros and cons of different options and picking the best one", 'personality' => "", 'img' => 'software engineer.jpg'],


            ['jobtitle' => 'Electrical Design Engineer', 'major_id' => '22', 'r' => '1', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '0', 'overview' => "Research, design, develop, test, or supervise the manufacturing and installation of electrical equipment, components, or systems for commercial, industrial, military, or scientific use.", 'jobdesc' => "a. Operate computer-assisted engineering or design software or equipment to perform engineering tasks.
            b. Prepare technical drawings, specifications of electrical systems, or topographical maps to ensure that installation and operations conform to standards and customer requirements.
            c. Confer with engineers, customers, or others to discuss existing or potential engineering projects or products.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "1.  Measuring how well a system is working and how to improve it
            2.  Figuring out how a system should work and how changes in the future will affect it", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Analytical Thinking
            b. Attention to Detail
            c. Persistence
            d. Integrity
            e. Achievement/Effort
            f. Cooperation", 'img' => 'electrical design engineer.jpg'],


            ['jobtitle' => 'Quality Engineer', 'major_id' => '23', 'r' => '1', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '1', 'overview' => "Design, develop, test, and evaluate integrated systems for managing industrial production processes, including human work factors, quality control, inventory control, logistics and material flow, cost analysis, and production coordination.", 'jobdesc' => "a. Estimate production costs, cost saving methods, and the effects of product design changes on expenditures for management review, action, and control.
            b. Plan and establish sequence of operations to fabricate and assemble parts or products and to promote efficient utilization.
            c. Analyze statistical data and product specifications to determine standards and establish quality and reliability objectives of finished product.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "1.  Figuring out how a system should work and how changes in the future will affect it
            2.  Measuring how well a system is working and how to improve it", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Attention to Detail
            b. Dependability
            d. Integrity
            e. Adaptability/Flexibility
            f. Analytical Thinking
            g. Cooperation", 'img' => 'quality engineer.jpg'],


            ['jobtitle' => 'Quality Engineer', 'major_id' => '24', 'r' => '1', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '1', 'overview' => "Design, develop, test, and evaluate integrated systems for managing industrial production processes, including human work factors, quality control, inventory control, logistics and material flow, cost analysis, and production coordination.", 'jobdesc' => "a. Estimate production costs, cost saving methods, and the effects of product design changes on expenditures for management review, action, and control.
            b. Plan and establish sequence of operations to fabricate and assemble parts or products and to promote efficient utilization.
            c. Analyze statistical data and product specifications to determine standards and establish quality and reliability objectives of finished product.", 'basicskill' => "1. Listening to others, not interrupting, and asking good questions
            2. Reading work related information", 'socialskill' => "",  'peopleskill' => "1.  Figuring out how a system should work and how changes in the future will affect it
            2.  Measuring how well a system is working and how to improve it", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Attention to Detail
            b. Dependability
            d. Integrity
            e. Adaptability/Flexibility
            f. Analytical Thinking
            g. Cooperation", 'img' => 'quality engineer.jpg'],



            ['jobtitle' => 'Robotic Engineer', 'major_id' => '25', 'r' => '1', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '1', 'overview' => "Research, design, develop, or test robotic applications.", 'jobdesc' => "a. Review or approve designs, calculations, or cost estimates.
            b. Process or interpret signals or sensor data.
            c. Debug robotics programs.", 'basicskill' => "1. Thinking about the pros and cons of different ways to solve a problem
            2. Keeping track of how well people and/or groups are doing in order to make improvements", 'socialskill' => "",  'peopleskill' => "1.  Figuring out how a system should work and how changes in the future will affect it
            2.  Thinking about the pros and cons of different options and picking the best one", 'personality' => "People interested in this work like activities that include ideas, thinking, and figuring things out.

            They do well at jobs that need:
            a. Analytical Thinking
            b. Attention to Detail
            c. Persistence
            d. Achievement/Effort
            e. Initiative
            f. Integrity", 'img' => 'robotics engineer.jpg'],


            ['jobtitle' => 'Civil Engineers', 'major_id' => '26', 'r' => '1', 'i' => '1', 'a' => '0', 's' => '0', 'e' => '0', 'c' => '1', 'overview' => "Perform engineering duties in planning, designing, and overseeing construction and maintenance of building structures and facilities, such as roads, railroads, airports, bridges, harbors, channels, dams, irrigation projects, pipelines, power plants, and water and sewage systems.", 'jobdesc' => "a. Inspect project sites to monitor progress and ensure conformance to design specifications and safety or sanitation standards.
            b. Compute load and grade requirements, water flow rates, or material stress factors to determine design specifications.
            c. Provide technical advice to industrial or managerial personnel regarding design, construction, program modifications, or structural repairs.", 'basicskill' => "1. Reading work related information
            2. Thinking about the pros and cons of different ways to solve a problem", 'socialskill' => "",  'peopleskill' => "1.  Figuring out how a system should work and how changes in the future will affect it
            2.  Measuring how well a system is working and how to improve it", 'personality' => "People interested in this work like activities that include practical, hands-on problems and solutions.

            They do well at jobs that need:
            a. Integrity
            b. Dependability
            c. Attention to Detail
            d. Analytical Thinking
            e. Initiative
            f. Achievement/Effort", 'img' => 'civil engineer.jpg'],



        ]);
    }
}
